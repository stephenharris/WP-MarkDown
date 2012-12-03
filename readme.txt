=== WP-Markdown ===
Contributors: stephenh1988
Donate link: http://www.harriswebsolutions.co.uk/blog/
Tags: markdown, formatting,prettify,syntax highlighter,code
Requires at least: 3.1
Tested up to: 3.4.1
Stable tag: 1.1.6

Allows Markdown to be enabled in posts, comments and bbPress forums. 


== Description ==
This plug-in allows you to write posts (of any post type) using the Markdown syntax. The plug-in converts the Markdown into HTML prior to saving the post. When editing a post, the plug-in converts
it back into Markdown syntax. 

The plug-in also allows you to enable Markdown in **comments** and **BBPress forums**. In these instances the plug-in adds a toolbar, and preview of the processed Markdown with [Prettify](http://code.google.com/p/google-code-prettify/) syntax highlighter applied (similiar to that used in the Stack Exchange websites such as [WordPress Stack Exchange](http://wordpress.stackexchange.com/)).

WP-Markdown stores the processed HTML, so deactivating the plug-in will not affect your posts, comments or bbPress forums.


== Installation ==

Installation is standard and straight forward. 

1. Upload `markdown` folder (and all it's contents!) to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to your Settings > Writing page and enable markdown for the appropriate post types and comments.


== Frequently Asked Questions ==

= How do I use Markdown syntax? =
For information on how to use Markdown sytnax pleae read: [Markdown: syntax](http://daringfireball.net/projects/markdown/syntax).

= What happens to the post content if I uninstall the plug-in? =
The plug-in uses Markdown to generate the appropriate HTML prior to the post saving to the database. When you edit a post, it is converted back to Markdown syntax. 
Once the plug-in is uninstalled you'll simply rever to editing the posts' HTML.


== Screenshots ==

1. The Markdown toolbar and previewer on a bbPress forum
2. Plug-in settings, located at the bottom of the Writing settings page
3. The Markdown toolbar and previewer on a comment form
4. Example of Markdown syntax
5. The output of the example Markdown


== Changelog ==

= 1.1.6 =

* Removes the wpautop/unwpautop functions. If using oembed, use embed shortcodes.
* Adds public wrapper functions.
* Remove bbPress front-end tinymce editor if using MarkDown


= 1.1.5 =

* Fixes bug introduced in 1.1.4 where line breaks are stripped (affects code blocks).


= 1.1.4 =

* Fixes bug where oembed would not work. Thanks ot Michael & Vinicius
* Adds a filters for MarkDown 'help' text: `wpmarkdown_help_text`
* Support for MarkDown extra (currently not supported in pagedown previewer)


= 1.1.3 =

* Stable with WordPress 3.4
* Fixed bug relating title attributes for links and images


= 1.1.2 =

* Fixed bug relating to comments by logged out users


= 1.1.1 =

* Fixed backslash bug


= 1.1 =

* Added option to replace TinyMCE with Markdown help bar on post editor


= 1.0 =

* Initial release




== Upgrade Notice ==

= 1.1.5 =
If you have upgraded to 1.1.4, please upgrade to 1.1.5. This release fixes a bug introduced in 1.1.4 (see http://wordpress.org/support/topic/plugin-wp-markdown-breaks-oembed-support)

= 1.1 =
* Added option to enable  the Markdown help bar on the backend post editor. Simple check Markdown help bar for 'Post editor' in the settings.
