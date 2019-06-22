<?php


namespace Lights;


class NewUserView extends View
{

    public function __construct(Lights $lights) {
        parent::__construct($lights);
    }

    public function present_body(){

        $html = '';

        if($this->lights->getUserCreated() & !$this->lights->getConfirmUser()){
            $html = <<< HTML
<div class="body">
<form class="options" method="post" action="post/login-post.php">
	<div class="controls">
	    <p class="checkbox"><label> An email message has been sent to your address. When it arrives, select the validate link in the email to validate your account.</label></p>
	    <p><button type="submit" name="cancel">Home</button></p>
    </div>
</form>
</div>
HTML;
        }
        else if($this->lights->isUserValidated()){
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
        }
        else{
            $html = <<< HTML
<div class="body">
<form class="options" method="post" action="post/login-post.php">
	<div class="controls">
	    <p class="checkbox"><label> Name</label><input type="name" name="name"></p>
	    <p class="checkbox"><label> Email</label><input type="email" name="email"></p>
	    <p><button type="submit" name="create">Create Account</button></p>
	    <p><button type="submit" name="cancel">Cancel</button></p>
    </div>
</form>
</div>
HTML;
        }

        return $html;
    }

}