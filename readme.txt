=== WP-Markdown ===
Contributors: stephenharris
Donate link: http://www.stephenharris.info
Tags: markdown, formatting,prettify,syntax highlighter,code
Requires at least: 3.1
Tested up to: 3.6
Stable tag: 1.5.1

Allows Markdown to be enabled in posts, comments and bbPress forums.


== Description ==
This plugin allows you to write posts (of any post type) using the Markdown syntax. The plugin converts the Markdown into HTML prior to saving the post. When editing a post, the plugin converts it back into Markdown syntax.

The plugin also allows you to enable Markdown in **comments** and **bbPress forums**. In these instances the plugin adds a toolbar, and preview of the processed Markdown with [Prettify](http://code.google.com/p/google-code-prettify/) syntax highlighter applied (similiar to that used in the Stack Exchange websites such as [WordPress Stack Exchange](http://wordpress.stackexchange.com/)).

WP-Markdown stores the processed HTML, so deactivating the plugin will not affect your posts, comments or bbPress forums.

== Installation ==

Installation is standard and straight forward.

1. Upload `wp-markdown` folder (and all its contents) to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Go to your Settings > Writing page and enable Markdown for the appropriate post types and comments.


== Frequently Asked Questions ==

= How do I use Markdown syntax? =
For information on how to use Markdown syntax, please read: [Markdown: syntax](http://daringfireball.net/projects/markdown/syntax).

= What happens to the post content if I uninstall the plugin? =
The plugin uses Markdown to generate the appropriate HTML prior to the post saving to the database. When you edit a post, it is converted back to Markdown syntax.
Once the plugin is uninstalled you'll simply revert to editing the posts' HTML.

= How do I embed content? =
A clean install of WordPress allows you to (for example) include a YouTube url on a separate line, whereupon it will automatically embed the video. This is not possible with WP-Markdown installed (*I tried - I broke more things. But if you manage it, feel free to make a pull-request: https://github.com/stephenharris/WP-MarkDown*).

You'll need  to use the `[embed]` shortcode.

= How do I prevent a bit of the page being parsed as Markdown? =
Enclose it in a `div` tag. It'll be ignored.

= How do I allow the contents of a `div` tag to be parsed as Markdown? =
Use `<div markdown="1">`.

== Screenshots ==

1. The Markdown toolbar and previewer on a bbPress forum.
2. Plugin settings, located at the bottom of the Writing settings page.
3. The Markdown toolbar and previewer on a comment form.
4. Example of Markdown syntax.
5. The output of the example Markdown.


== Changelog ==

= 1.5.1 =
* Addresses issues with (since withdrawn) 1.5.0 version.

= 1.5 =
* Handle tables. See [#35](https://github.com/stephenharris/WP-MarkDown/issues/35).
* Fix responsive layout issue. See [#31](https://github.com/stephenharris/WP-MarkDown/issues/31).
* Use compressed prettify.js.
* Fix bug with lists not being escaped.
* Fix textdomain. Change to 'wp-markdown'.
* Add language file.
* Fix incompatability issues with bbPress.

= 1.4 =
* Fix issue with consecutive shortcodes.
* Fix editing bbPress topics/replies on the front-end corrupts Markdown. See [#25](https://github.com/stephenharris/WP-MarkDown/issues/25).

= 1.3 =
* Apply kses and balance tags after MD->HTML conversion. See[#23](https://github.com/stephenharris/WP-MarkDown/issues/23).
* Compress scripts and minify icon sprite. See [#7](https://github.com/stephenharris/WP-MarkDown/issues/7).
* Add 'more' tag to Markdown editor.
* Add support for iframes. See [#22](https://github.com/stephenharris/WP-MarkDown/issues/22).
* Fix bug with underscores in shortcodes.
* Add support for tbody, tfoot and thead tags.
* Refactoring including renaming of plugin style and script handles.

= 1.2 =
* Fix problems with images nested inside links. See [#12](https://github.com/stephenharris/WP-MarkDown/issues/12).
* Ensure prettify is loaded, if needed, on home page. See [#6](https://github.com/stephenharris/WP-MarkDown/issues/6).
* Update Markdownify.
* Update Prettify.

= 1.1.6 =
* Remove the wpautop/unwpautop functions. If using oEmbed, use embed shortcodes.
* Add public wrapper functions.
* Remove bbPress front-end TinyMCE editor if using Markdown.

= 1.1.5 =
* Fix bug introduced in 1.1.4 where line breaks are stripped (affects code blocks).

= 1.1.4 =
* Fix bug where oEmbed would not work. Thanks to Michael & Vinicius.
* Add a filter for Markdown 'help' text: `wpmarkdown_help_text`.
* Support for Markdown Extra (currently not supported in pagedown previewer).

= 1.1.3 =
* Stable with WordPress 3.4.
* Fix bug relating title attributes for links and images.

= 1.1.2 =
* Fix bug relating to comments by logged out users.

= 1.1.1 =
* Fix backslash bug.

= 1.1 =
* Add option to replace TinyMCE with Markdown help bar on post editor.

= 1.0 =
* Initial release.


== Upgrade Notice ==

= 1.1.5 =
If you have upgraded to 1.1.4, please upgrade to 1.1.5. This release fixes a bug introduced in 1.1.4 (see http://wordpress.org/support/topic/plugin-wp-markdown-breaks-oembed-support)

= 1.1 =
* Added option to enable the Markdown help bar on the back-end post editor. Simply check Markdown help bar for 'Post editor' in the settings.
