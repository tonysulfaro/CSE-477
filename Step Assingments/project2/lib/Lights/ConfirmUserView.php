<?php


namespace Lights;


class ConfirmUserView extends View
{
    public function __construct(Lights $lights) {
        parent::__construct($lights);
    }

    public function present_body(){
        $html = <<< HTML
<div class="body">
<form class="options" method="post" action="post/login-post.php">
	<div class="controls">
	    <p class="checkbox"><label> Email</label><input type="email" name="email"></p>
	    <p class="checkbox"><label> Password</label><input type="password" name="password"></p>
	    <p class="checkbox"><label> Password (again)</label><input type="password" name="passwordagain"></p>
	    <p><button type="submit" name="createreset">Create Account</button></p>
	    <p><button type="submit" name="cancel">Cancel</button></p>
    </div>
</form>
</div>
HTML;
        return $html;
    }

}