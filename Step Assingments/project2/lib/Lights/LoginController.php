<?php


namespace Lights;


class LoginController extends Controller
{

    public function __construct(Lights $lights, array $post)
    {
        parent::__construct($lights);

        if (isset($post['create'])) {
            // do creation of user
            $lights->setUserCreated(true);
            mail($post['email'], 'click on this now '.$post['name'], 'http://webdev.cse.msu.edu/~sulfaroa/project2/confirm-user.php');
            $this->setRedirect("../new-user.php");
        }

        if (isset($post['createreset'])) {
            $lights->setUserCreated(true);
            $this->setRedirect("../login.php");
        }

        if (isset($post['cancel'])) {
            if ($lights->getUserCreated()) {
                $lights->setUserCreated(false);
            }
            $this->setRedirect("../index.php");
        }

        if (isset($post['validate'])){
            $lights->setValidateUser(true);
            $this->setRedirect("../confirm-user.php");
        }

    }

}