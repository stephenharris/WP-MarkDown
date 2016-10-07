<?php

class HTMLToMarkdownTest extends PHPUnit_Framework_TestCase
{

	public function testAmpsAndAngles()
	{
	
		//Converts links to reference style
		//Converts HTML entities to their applicable characters e.g. "&amp;" to "&"
		ob_start();
		include( 'fixtures/Amps and angle encoding-2.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Amps and angle encoding.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	public function testAutoLinks()
	{
	
		ob_start();
		include( 'fixtures/Auto links.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Auto links.html' );
		$html = ob_get_contents();
		ob_end_clean();
		
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
		

	public function testBackslashEscapes()
	{
		$this->markTestIncomplete();
	
		ob_start();
		include( 'fixtures/Backslash escapes.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Backslash escapes.html' );
		$html = ob_get_contents();
		ob_end_clean();

		//file_put_contents( dirname( __FILE__ ) . '/fixtures/output.md', wpmarkdown_html_to_markdown( $html ) );
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	
	public function testBlockquotesCodeBlocks()
	{
	
		ob_start();
		include( 'fixtures/Blockquotes with code blocks.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Blockquotes with code blocks.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	
	public function testHorizontalRules()
	{
	
		//Note all horizontal rules are converted to asterix form
		//All leading white space removed unless as part of code
		
		ob_start();
		include( 'fixtures/Horizontal rules-2.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Horizontal rules.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	
	public function testInlineHTMLAdvanced()
	{
	
		//HTML is formatted
		ob_start();
		include( 'fixtures/Inline HTML (Advanced)-2.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Inline HTML (Advanced).html' );
		$html = ob_get_contents();
		ob_end_clean();
			
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	
	public function testInlineHTMLSimple()
	{
	
		//HRs covnerted to astericks
		//HTML tidied
		ob_start();
		include( 'fixtures/Inline HTML (Simple)-2.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Inline HTML (Simple).html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	
	public function testInlineHTMLComments()
	{
	
		ob_start();
		include( 'fixtures/Inline HTML comments.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
		ob_start();
		include( 'fixtures/Inline HTML comments.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
		
	
	public function testLinksReferenceStyle()
	{
	
		//Markdown tidied up
		ob_start();
		include( 'fixtures/Links, reference style-2.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Links, reference style.html' );
		$html = ob_get_contents();
		ob_end_clean();
		
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	


	public function testLiteralQuotesInTitles()
	{
	
		//Markdown tidied up
		ob_start();
		include( 'fixtures/Literal quotes in titles-2.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Literal quotes in titles.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	
	public function testNestedBlockQuotes()
	{
		ob_start();
		include( 'fixtures/Nested blockquotes.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Nested blockquotes.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	
	public function testOrderedAndUnorderedLists()
	{
	
		//Unordered lists converted to astericks
		//Markdown tidied up
		ob_start();
		include( 'fixtures/Ordered and unordered lists-2.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
		ob_start();
		include( 'fixtures/Ordered and unordered lists.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	public function testStrongEmTogether()
	{
		//Asterisks used instead of underscores for em/strong 
		ob_start();
		include( 'fixtures/Strong and em together-2.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Strong and em together.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	

	public function testTabs()
	{
		//Blank line after code
		//Lists converted to astericks
		//Line breaks removed
		ob_start();
		include( 'fixtures/Tabs-2.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Tabs.html' );
		$html = ob_get_contents();
		ob_end_clean();
		
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	
	public function testTidyness()
	{
		ob_start();
		include( 'fixtures/Tidyness.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Tidyness.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}


	public function testCodeBlocks()
	{
		$md = file_get_contents( WP_MARKDOWN_FIXTURES . '/code-block.md' );
		$html = file_get_contents( WP_MARKDOWN_FIXTURES . '/code-block.html' );
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}

	/**
	 * @ticket 69
	 */
	public function testCodeBlocksWithFences()
	{
		$this->markTestSkipped( 'Issue #69 is still open' );

		$md = file_get_contents( WP_MARKDOWN_FIXTURES . '/code-block-fences.md' );
		$html = file_get_contents( WP_MARKDOWN_FIXTURES . '/code-block-with-code-class.html' );
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}

	
	public function testTable()
	{
	
		ob_start();
		include( 'fixtures/table.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/table.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		//file_put_contents( 'table-actual.md', wpmarkdown_html_to_markdown( $html ) );
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}

	public function testNewLines()
	{
		$md = file_get_contents( WP_MARKDOWN_FIXTURES . '/newlines/newlines-with-spaces.md' );
		$html = file_get_contents( WP_MARKDOWN_FIXTURES . '/newlines/newlines.html' );
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}


	public function testShortcodes()
	{
	
		ob_start();
		include( 'fixtures/shortcodes-2.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/shortcodes.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		//file_put_contents( dirname( __FILE__ ) . '/fixtures/shortcodes-actual.md', wpmarkdown_html_to_markdown( $html ) );
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	public function testDontEscapeShortcodes()
	{
	
		ob_start();
		include( 'fixtures/html-with-shortcodes.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/html-with-shortcodes.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		//file_put_contents( dirname( __FILE__ ) . '/fixtures/html-with-shortcodes.md', wpmarkdown_html_to_markdown( $html ) );
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	public function testEscapeOrderedLists()
	{
	
		ob_start();
		include( 'fixtures/escaping-ordered-lists.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/escaping-ordered-lists.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	public function testEscapeUnorderedLists()
	{
	
		ob_start();
		include( 'fixtures/escaping-unordered-lists.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/escaping-unordered-lists.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	public function testGeneralBasics()
	{
		$this->markTestIncomplete();

		ob_start();
		include( 'fixtures/Markdown Documentation - Basics.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Markdown Documentation - Basics.html' );
		$html = ob_get_contents();
		ob_end_clean();

		//file_put_contents( dirname( __FILE__ ) . '/fixtures/output.md', wpmarkdown_html_to_markdown( $html ) );
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
	public function testGeneralSyntax()
	{
		$this->markTestIncomplete();

		ob_start();
		include( 'fixtures/Markdown Documentation - Syntax.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Markdown Documentation - Syntax.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		//file_put_contents( dirname( __FILE__ ) . '/fixtures/output.md', wpmarkdown_html_to_markdown( $html ) );
		$this->assertEquals( trim( $md ),  wpmarkdown_html_to_markdown( $html ) );
	}
	
}
