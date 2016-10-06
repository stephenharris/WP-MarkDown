WP shortcodes are problematic as they are very similar to MarkDown links. For instance:

This is a [shortcode] but this could be a shortcode and a link [another_shortcode].

Don't worry if the identifier part isn't defined, it will be kept as a shortcode: [shortcode][third_shortcode].

[another_shortcode]: http://example.com/  "Optional Title Here"
