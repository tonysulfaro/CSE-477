<?php


namespace Felis;


class CasesController
{
    public function __construct(Site $site, array $post) {

        $root = $site->getRoot();
        if(isset($post['add'])) {
            // Login failed
            $this->redirect = "$root/newcase.php";
        } else if(isset($post['delete'])) {
            $this->redirect = "$root/cases.php";
        }
    }

    public function getRedirect(){
        return $this->redirect;
    }

    private $redirect;	// Page we will redirect the user to.
}