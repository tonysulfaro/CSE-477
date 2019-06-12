<?php


namespace Felis;


class View
{
    /**
     * Create the HTML for the page footer
     * @return string HTML for the standard page footer
     */
    public function footer()
    {
        return <<<HTML
<footer><p>Copyright © 2019 Felis Investigations, Inc. All rights reserved.</p></footer>
HTML;
    }

    /**
     * Set the page title
     * @param $title New page title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Create the HTML for the contents of the head tag
     * @return string HTML for the page head
     */
    public function head() {
        return <<<HTML
        
        <head>
<meta charset="utf-8">
<title>Felis Investigations</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="lib/felis.css">
</head>

HTML;
    }

    /**
     * Create the HTML for the page header
     * @return string HTML for the standard page header
     */
    public function header() {
        return <<<HTML
<nav>
    <ul class="left">
        <li><a href="./">The Felis Agency</a></li>
    </ul>
</nav>

<header class="main">
    <h1><img src="images/comfortable.png" alt="Felis Mascot"> $this->title 
    <img src="images/comfortable.png" alt="Felis Mascot"></h1>
</header>
HTML;
    }

    private $title = "";	// The page title
}