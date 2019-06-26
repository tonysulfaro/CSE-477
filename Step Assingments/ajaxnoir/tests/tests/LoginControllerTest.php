<?php

define("LOGIN_SESSION", "ajaxnoir_login");

/** @file
 * @brief Unit tests for the class LoginController
 * @cond 
 */
class LoginControllerTest extends \PHPUnit\Framework\TestCase {
    private static $site;

    public static function setUpBeforeClass() {
        self::$site = new Noir\Site();
        $localize  = require 'localize.inc.php';
        if(is_callable($localize)) {
            $localize(self::$site);
        }
    }

    protected function setUp() {
        $users = new Noir\Movies(self::$site);
        $tableName = $users->getTableName();

        $sql = <<<SQL
delete from $tableName;
insert into $tableName(id, user, title, year, rating)
values 
    (12, "test", "The Maltese Falcon", "1941", "10"),
    (14, "test", "Felis Noir", "2016", "8"),
    (15, "other", "The Maltese Falcon", "1941", "10")
SQL;

        self::$site->pdo()->query($sql);
    }

	public function test_construct() {
		/*
		 * This is an extra login record we'll use for
		 * testing purposes. Creating this makes it easier
		 * to distribute the code without everyone getting
		 * a login that anyone can use.
		 *
		 * User: test
		 * Password: zXAajLf9
		 */
		$extra = array('user' => 'test', 'salt' => '40wQld%&LYNp4ZBC',
			'hash' => 'df4c872a265f94094e3e28ff3c7259889e9eedbee4109eaa060bfe3280540974');

        // Valid login
        $post = array('user' => "test",
            'password' => "zXAajLf9");
        $session = array();

        $login = new Noir\LoginController(self::$site, $post, $session, $extra);
        $ret = $login->getRedirect();
        $this->assertEquals(self::$site->getRoot(), $ret);

        // Bad user ID
        $post = array('user' => "doofus",
            'password' => "zXAajLf9");
        $session = array();

        $login = new Noir\LoginController(self::$site, $post, $session, $extra);
        $ret = $login->getRedirect();
        $this->assertEquals(self::$site->getRoot() . "/login.php", $ret);

        // Bad password
        $post = array('user' => "test",
            'password' => "12345678");
        $session = array();

        $login = new Noir\LoginController(self::$site, $post, $session, $extra);
        $ret = $login->getRedirect();
        $this->assertEquals(self::$site->getRoot() . "/login.php", $ret);
	}

}

/// @endcond
?>
