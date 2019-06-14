<?php


class SiteTest extends \PHPUnit\Framework\TestCase
{
    public function test_constructor(){
        $site = new \Felis\Site();

        $site->setEmail('email');
        $this->assertEquals('email', $site->getEmail());

        $site->setRoot('root');
        $this->assertEquals('root', $site->getRoot());

        $this->assertEquals('', $site->getTablePrefix());
    }

    public function test_localize() {
        $site = new Felis\Site();
        $localize = require 'localize.inc.php';
        if(is_callable($localize)) {
            $localize($site);
        }
        $this->assertEquals('test_', $site->getTablePrefix());
    }
}