<?php


class FelisViewTest extends \PHPUnit\Framework\TestCase
{
    public function test_footer() {
        $view = new Felis\View();

        $this->assertContains('<footer><p>Copyright © 2019 Felis Investigations, Inc. All rights reserved.</p></footer>',
            $view->footer());
    }

    public function test_heade1r(){
        $view = new Felis\View();
        $view->setTitle("Felis Investigations");
        $this->assertContains("<meta charset=\"utf-8\">", $view->head());
        $this->assertContains("<title>Felis Investigations</title>", $view->head());
        $this->assertContains("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">", $view->head());
        $this->assertContains("<link rel=\"stylesheet\" href=\"lib/felis.css\">", $view->head());
    }

    public function test_header() {
        $view = new Felis\View();
        $view->setTitle("whatever");
        $html = $view->header();

        $this->assertContains('<nav>', $html);
        $this->assertContains('<ul class="left">', $html);
        $this->assertContains('<li><a href="./">The Felis Agency</a></li>', $html);
        $this->assertContains('</ul>', $html);
        $this->assertContains('</nav>', $html);
        $this->assertContains('<header class="main">', $html);
        $this->assertContains('<h1><img src="images/comfortable.png" alt="Felis Mascot"> whatever', $html);
        $this->assertContains('<img src="images/comfortable.png" alt="Felis Mascot"></h1>', $html);
        $this->assertContains('</header>', $html);

        $this->assertNotContains('<ul class="right">', $html);
    }

    public function test_addLink() {
        $view = new Felis\View();
        $view->setTitle("whatever");
        $view->addLink("test.php", "Name to Display");
        $html = $view->header();

        $this->assertContains('<ul class="right"><li><a href="test.php">Name to Display</a></li></ul>', $html);
    }
}