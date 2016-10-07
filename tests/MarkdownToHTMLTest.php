<?php

class MarkdownToHTMLTest extends PHPUnit_Framework_TestCase
{
	
	public function testAmpsAndAngles()
	{
	
		ob_start();
		include( 'fixtures/Amps and angle encoding.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Amps and angle encoding.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
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
	
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}
	
	
	public function testBackslashEscapes()
	{
	
		ob_start();
		include( 'fixtures/Backslash escapes.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Backslash escapes.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
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
	
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}
	
	
	public function testHardWrappedPagraphsWithListLikeLines()
	{
	
		ob_start();
		include( 'fixtures/Hard-wrapped paragraphs with list-like lines.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Hard-wrapped paragraphs with list-like lines.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}
	
	
	public function testHorizontalRules()
	{
	
		ob_start();
		include( 'fixtures/Horizontal rules.md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Horizontal rules.html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}
	
	
	public function testInlineHTMLAdvanced()
	{
	
		ob_start();
		include( 'fixtures/Inline HTML (Advanced).md' );
		$md = ob_get_contents();
		ob_end_clean();
	
	
		ob_start();
		include( 'fixtures/Inline HTML (Advanced).html' );
		$html = ob_get_contents();
		ob_end_clean();
	
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}
		

	public function testInlineHTMLSimple()
	{
		//TODO - Trailing spaces error?
		$this->markTestIncomplete( 'Trailing spaces error?' );

		ob_start();
		include( 'fixtures/Inline HTML (Simple).md' );
		$md = ob_get_contents();
		ob_end_clean();

		ob_start();
		include( 'fixtures/Inline HTML (Simple).html' );
		$html = ob_get_contents();
		ob_end_clean();

		//file_put_contents( dirname( __FILE__ ) . '/fixtures/output.html', wpmarkdown_markdown_to_html( $md ) );
		$this->assertEquals( trim( $html ),  wpmarkdown_markdown_to_html( $md ) );
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

		$this->assertEquals( $html, wpmarkdown_markdown_to_html( $md ) );
	}

	public function testLinksInlineStyle()
	{

		ob_start();
		include( 'fixtures/Links, inline style.md' );
		$md = ob_get_contents();
		ob_end_clean();

		ob_start();
		include( 'fixtures/Links, inline style.html' );
		$html = ob_get_contents();
		ob_end_clean();

		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testLinksReferenceStyle()
	{
		ob_start();
		include( 'fixtures/Links, reference style.md' );
		$md = ob_get_contents();
		ob_end_clean();

		ob_start();
		include( 'fixtures/Links, reference style.html' );
		$html = ob_get_contents();
		ob_end_clean();

		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testLiteralQuotesInTitles()
	{

		ob_start();
		include( 'fixtures/Literal quotes in titles.md' );
		$md = ob_get_contents();
		ob_end_clean();

		ob_start();
		include( 'fixtures/Literal quotes in titles.html' );
		$html = ob_get_contents();
		ob_end_clean();

		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testGeneralBasics()
	{
		ob_start();
		include( 'fixtures/Markdown Documentation - Basics.md' );
		$md = ob_get_contents();
		ob_end_clean();

		ob_start();
		include( 'fixtures/Markdown Documentation - Basics.html' );
		$html = ob_get_contents();
		ob_end_clean();

		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testGeneralSyntax()
	{
		ob_start();
		include( 'fixtures/Markdown Documentation - Syntax.md' );
		$md = ob_get_contents();
		ob_end_clean();

		ob_start();
		include( 'fixtures/Markdown Documentation - Syntax.html' );
		$html = ob_get_contents();
		ob_end_clean();

		$this->assertEquals( $html, wpmarkdown_markdown_to_html( $md ) );
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

		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testOrderedAndUnorderedLists()
	{

		ob_start();
		include( 'fixtures/Ordered and unordered lists.md' );
		$md = ob_get_contents();
		ob_end_clean();

		ob_start();
		include( 'fixtures/Ordered and unordered lists.html' );
		$html = ob_get_contents();
		ob_end_clean();

		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testStrongEmTogether()
	{
		ob_start();
		include( 'fixtures/Strong and em together.md' );
		$md = ob_get_contents();
		ob_end_clean();

		ob_start();
		include( 'fixtures/Strong and em together.html' );
		$html = ob_get_contents();
		ob_end_clean();

		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}


	public function testTabs()
	{
		ob_start();
		include( 'fixtures/Tabs.md' );
		$md = ob_get_contents();
		ob_end_clean();

		ob_start();
		include( 'fixtures/Tabs.html' );
		$html = ob_get_contents();
		ob_end_clean();

		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
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

		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testHeaders()
	{

		ob_start();
		include( 'fixtures/headers.md' );
		$md = ob_get_contents();
		ob_end_clean();


		ob_start();
		include( 'fixtures/headers.html' );
		$html = ob_get_contents();
		ob_end_clean();


		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
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

		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testFootnote()
	{
    
    		ob_start();
		include( 'fixtures/footnote.md' );
		$md = ob_get_contents();
		ob_end_clean();

    		ob_start();
 	   	include( 'fixtures/footnote.html' );
    		$html = ob_get_contents();
	    	ob_end_clean();

	    	$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testLinks()
	{
    
    		ob_start();
	    	include( 'fixtures/links.md' );
    		$md = ob_get_contents();
	    	ob_end_clean();

	   	ob_start();
    		include( 'fixtures/links.html' );
	    	$html = ob_get_contents();
    		ob_end_clean();

	    	$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
    	}
 
	public function testShortcodes()
    	{

	    	ob_start();
    		include( 'fixtures/shortcodes.md' );
	    	$md = ob_get_contents();
    		ob_end_clean();

	    	ob_start();
	    	include( 'fixtures/shortcodes.html' );
    		$html = ob_get_contents();
	    	ob_end_clean();
 
	    	$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}
    
	public function testLists()
	{
    
    		ob_start();
	    	include( 'fixtures/lists.md' );
    		$md = ob_get_contents();
	    	ob_end_clean();
    
    		ob_start();
	    	include( 'fixtures/lists.html' );
    		$html = ob_get_contents();
	    	ob_end_clean();
    
    		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}
    
   	public function testGeneral() {
		$this->markTestIncomplete();

    		ob_start();
	    	include( 'fixtures/general.md' );
    		$md = ob_get_contents();
	    	ob_end_clean();

	    	ob_start();
    		include( 'fixtures/general.html' );
	    	$html = ob_get_contents();
    		ob_end_clean();

		//file_put_contents( 'table-actual.md', wpmarkdown_html_to_markdown( $html ) );
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testCodeBlocks()
	{
		$md = file_get_contents( WP_MARKDOWN_FIXTURES . '/code-block.md' );
		$html = file_get_contents( WP_MARKDOWN_FIXTURES . '/code-block.html' );
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testCodeBlocksWithFences()
	{
		$md = file_get_contents( WP_MARKDOWN_FIXTURES . '/code-block-fences.md' );
		$html = file_get_contents( WP_MARKDOWN_FIXTURES . '/code-block-with-code-class.html' );
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testNewLinesWithSpaces()
	{
		$md = file_get_contents( WP_MARKDOWN_FIXTURES . '/newlines/newlines-with-spaces.md' );
		$html = file_get_contents( WP_MARKDOWN_FIXTURES . '/newlines/newlines.html' );
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

	public function testNewLinesWithBR()
	{
		$md = file_get_contents( WP_MARKDOWN_FIXTURES . '/newlines/newlines-with-br.md' );
		$html = file_get_contents( WP_MARKDOWN_FIXTURES . '/newlines/newlines.html' );
		$this->assertEquals( $html,  wpmarkdown_markdown_to_html( $md ) );
	}

}
