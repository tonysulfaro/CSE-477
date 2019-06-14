<?php


namespace Felis;


class HomeView extends View
{
    /**
     * Constructor
     * Sets the page title and any other settings.
     */
    public function __construct() {
        $this->addLink("login.php", "Log in");
        $this->setTitle("Felis Investigations");
    }


    /**
     * Add content to the header
     * @return string Any additional comment to put in the header
     */
    protected function headerAdditional() {
        return <<<HTML
<p>Welcome to Felis Investigations!</p>
<p>Domestic, divorce, and carousing investigations conducted without publicity. People and cats shadowed
	and investigated by expert inspectors. Katnapped kittons located. Missing cats and witnesses located.
	Accidents, furniture damage, losses by theft, blackmail, and murder investigations.</p>
<p><a href="">Learn more</a></p>
HTML;
    }

    public function addTestimonial($testimonial, $author){
        $this->testimonials[] = ['quote' => $testimonial, 'author'=>$author];
    }

    public function testimonials(){
        $html = '';
        if(count($this->testimonials) > 0) {

            foreach($this->testimonials as $link) {
                $html .=  '<blockquote><p>';
                $html .= $link['quote'];
                $html .= '</p></blockquote>';
                $html .= '<cite>';
                $html .= $link['author'];
                $html .= '</cite>';
            }
        }
        return $html;
    }

    private $testimonials = [];
}