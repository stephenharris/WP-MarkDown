Markdown supports two style of links: *inline* and *reference*. In both styles, the link text is delimited by `[square brackets]`.

To create an inline link, use a set of regular parentheses immediately after the link text's closing square bracket. Inside the parentheses,
put the URL where you want the link to point, along with an *optional* title for the link, surrounded in quotes.

This is [example](http://example.com/ "Title") has a title. But [This link](http://example.net/) does not.

Reference-style links use a second set of square brackets, inside which you place a label of your choosing to identify the link. This is [an example][id] of a reference-style link.

You can optionally use a space to separate the sets of brackets, suc as in [this example] [id].

Unfortunately in WP we have to worry about [shortcodes] which look a lot like links but really really aren't.

[id]: http://example.com/  "Optional Title Here"
