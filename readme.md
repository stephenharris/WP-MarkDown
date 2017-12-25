# WP-Markdown

**Contributors:** stephenharris  
**Donate link:** http://www.stephenharris.info  
**Tags:** markdown,formatting,prettify,syntax highlighter,code  
**Requires at least:** 3.1  
**Tested up to:** 3.6  
**Stable tag:** 1.5.1

Allows Markdown to be enabled in posts, comments and bbPress forums.


## Description

This plugin allows you to write posts (of any post type) using the Markdown syntax. The plugin converts the Markdown into HTML prior to saving the post. When editing a post, the plugin converts it back into Markdown syntax.

The plugin also allows you to enable Markdown in **comments** and **bbPress forums**. In these instances the plugin adds a toolbar, and preview of the processed Markdown with [Prettify](http://code.google.com/p/google-code-prettify/) syntax highlighter applied (similiar to that used in the Stack Exchange websites such as [WordPress Stack Exchange](http://wordpress.stackexchange.com/)).

WP-Markdown stores the processed HTML, so deactivating the plugin will not affect your posts, comments or bbPress forums.


## Installation

Installation is standard and straight forward.

1. Upload `wp-markdown` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Go to your Settings > Writing page and enable Markdown for the appropriate post types and comments.


## Frequently Asked Questions

### How do I use Markdown syntax?
For information on how to use Markdown syntax please read: [Markdown: syntax](http://daringfireball.net/projects/markdown/syntax).

### What happens to the post content if I uninstall the plugin?
The plugin uses Markdown to generate the appropriate HTML prior to the post saving to the database. When you edit a post, it is converted back to Markdown syntax.
Once the plugin is uninstalled you'll simply revert to editing the posts' HTML.

### How do I embed content?
A clean install of WordPress allows you to (for example) include a YouTube URL on a separate line, whereupon it will automatically embed the video. This is not possible with WP-Markdown installed (*I tried - I broke more things. But if you manage it, feel free to make a pull-request: https://github.com/stephenharris/WP-MarkDown*).

You'll need  to use the `[embed]` shortcode.

### How do I prevent a bit of the page being parsed as Markdown?
Enclose it in a `div` tag. It'll be ignored.

### How do I allow the contents of a `div` tag to be parsed as Markdown?
Use `<div markdown="1">`.


## Screenshots

### 1. The Markdown toolbar and previewer on a bbPress forum
![The Markdown toolbar and previewer on a bbPress forum.](http://s.wordpress.org/extend/plugins/wp-markdown/screenshot-1.png)

### 2. Plug-in settings, located at the bottom of the Writing settings page
![Plug-in settings, located at the bottom of the Writing settings page.](http://s.wordpress.org/extend/plugins/wp-markdown/screenshot-2.png)

### 3. The Markdown toolbar and previewer on a comment form
![The Markdown toolbar and previewer on a comment form.](http://s.wordpress.org/extend/plugins/wp-markdown/screenshot-3.png)

### 4. Example of Markdown syntax
![Example of Markdown syntax.](http://s.wordpress.org/extend/plugins/wp-markdown/screenshot-4.png)

### 5. The output of the example Markdown
![The output of the example Markdown.](http://s.wordpress.org/extend/plugins/wp-markdown/screenshot-5.png)


## Change Log

See [CHANGELOG.md](./CHANGELOG.md).
