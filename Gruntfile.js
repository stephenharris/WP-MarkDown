module.exports = function(grunt) {

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
      			files: {
        			'js/frontend.min.js': ['js/frontend.js'],
        			'js/fullcalendar.min.js': ['js/fullcalendar.js'],
      			}
		}
	},
	jshint: {
		options: {
			globals: {
				"WP_MARKDOWN_SCRIPT_DEBUG": false,
			},
			'-W020': true, //Read only - error when assigning WP_MARKDOWN_SCRIPT_DEBUG a value.
		},
		all: [ 'js/*.js', '!js/*.min.js' ]
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
	}
});



grunt.loadNpmTasks('grunt-contrib-uglify');

grunt.loadNpmTasks('grunt-contrib-jshint');

grunt.loadNpmTasks('grunt-wp-readme-to-markdown');

grunt.loadNpmTasks('grunt-phpunit');

 // Default task(s).
grunt.registerTask('default', ['uglify']);

grunt.registerTask('readme', ['wp_readme_to_markdown']);
};
