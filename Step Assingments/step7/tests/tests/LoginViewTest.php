<?php

require 'lib/site.inc.php';

class LoginViewTest extends \PHPUnit\Framework\TestCase
{

    public function test_invalid_login(){
        $get = '';
        $view = new \Felis\LoginView($_SESSION, $get);

    }

}