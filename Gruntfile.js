module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);
	
  // Project configuration.
  grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),
	
	uglify: {
		options: {
			compress: {
				global_defs: {
					"WP_MARKDOWN_SCRIPT_DEBUG": false
				},
				dead_code: true
      			},
			banner: '/*! <%= pkg.name %> <%= pkg.version %> <%= grunt.template.today("yyyy-mm-dd HH:MM") %> */\n'
		},
		build: {
			files: [{
				expand: true,     // Enable dynamic expansion.
				src: ['js/**/*.js', '!js/**/*.min.js' ],
				ext: '.min.js',   // Dest filepaths will have this extension.
			}]
		}
	},
	
	jshint: {
		options: {
			globals: {
				"WP_MARKDOWN_SCRIPT_DEBUG": false,
			},
			reporter: require('jshint-stylish'),
			'-W020': true, //Read only - error when assigning WP_MARKDOWN_SCRIPT_DEBUG a value.
		},
		all: ['js/**/*.js', '!js/**/*.min.js', '!js/pagedown/*', '!**/prettify.js' ],
  	},
  	
	wp_readme_to_markdown: {
		convert:{
			files: {
				'readme.md': 'readme.txt'
			},
		},
	},
	
	phpunit: {
		classes: {
			dir: 'tests/php/'
		},
		options: {
			bin: 'vendor/bin/phpunit',
			bootstrap: 'tests/php/phpunit.php',
			colors: true
		}
	},
	
	clean: {
		//Clean up build folder
		main: ['build/wp-markdown']
	},

	copy: {
		// Copy the plugin to a versioned release directory
		main: {
			src:  [
				'**',
				'!*~',
				'!node_modules/**',
				'!build/**',
				'!.git/**','!.gitignore','!.gitmodules',
				'!tests/**',
				'!vendor/**',
				'!Gruntfile.js','!package.json',
				'!composer.lock','!composer.phar','!composer.json',
				'!CONTRIBUTING.md'
			],
			dest: 'build/wp-markdown/'
		},
	},
	
    checkrepo: {
    	deploy: {
            tag: {
                eq: '<%= pkg.version %>',    // Check if highest repo tag is equal to pkg.version
            },
            tagged: true, // Check if last repo commit (HEAD) is not tagged
            clean: true,   // Check if the repo working directory is clean
        }
    },
    
    wp_deploy: {
    	deploy:{
            options: {
        		svn_user: 'stephenharris',
        		plugin_slug: 'wp-markdown',
        		build_dir: 'build/wp-markdown/'
            },
    	}
    },
    
    po2mo: {
    	files: {
        	src: 'languages/*.po',
          expand: true,
        },
    },

    pot: {
    	options:{
        	text_domain: 'wp-markdown',
        	dest: 'languages/',
			keywords: ['__:1',
			           '_e:1',
			           '_x:1,2c',
			           'esc_html__:1',
			           'esc_html_e:1',
			           'esc_html_x:1,2c',
			           'esc_attr__:1', 
			           'esc_attr_e:1', 
			           'esc_attr_x:1,2c', 
			           '_ex:1,2c',
			           '_n:1,2', 
			           '_nx:1,2,4c',
			           '_n_noop:1,2',
			           '_nx_noop:1,2,3c'
			          ],
    	},
    	files:{
    		src:  [
    		       '**/*.php',
    		       '!node_modules/**',
    		       '!build/**',
    		       '!tests/**',
    		       '!vendor/**',
    		       '!*~',
    		       ],
    		expand: true,
    	}
    },

    checktextdomain: {
    	options:{
			text_domain: 'wp-markdown',
			correct_domain: true,
			keywords: ['__:1,2d',
			           '_e:1,2d',
			           '_x:1,2c,3d',
			           'esc_html__:1,2d',
			           'esc_html_e:1,2d',
			           'esc_html_x:1,2c,3d',
			           'esc_attr__:1,2d', 
			           'esc_attr_e:1,2d', 
			           'esc_attr_x:1,2c,3d', 
			           '_ex:1,2c,3d',
			           '_n:1,2,4d', 
			           '_nx:1,2,4c,5d',
			           '_n_noop:1,2,3d',
			           '_nx_noop:1,2,3c,4d'
			          ],
		},
		files: {
			src:  [
				'**/*.php',
				'!node_modules/**',
				'!build/**',
				'!tests/**',
				'!vendor/**',
				'!*~',
			],
			expand: true,
		},
    },
	
});

//Tasks
grunt.registerTask( 'test', [ 'phpunit', 'jshint' ] );
grunt.registerTask( 'build', [ 'test', 'uglify', 'pot', 'po2mo', 'wp_readme_to_markdown', 'clean', 'copy' ] );
grunt.registerTask( 'deploy', [ 'checkbranch:master', 'checkrepo:deploy',  'test', 'wp_readme_to_markdown', 'clean', 'copy', 'wp_deploy' ] );

grunt.registerTask('readme', ['wp_readme_to_markdown']);
};
