<?php


namespace Felis;


class Site
{

    public function __construct()
    {
    }

    /**
     * Configure the database
     * @param $host
     * @param $user
     * @param $password
     * @param $prefix
     */
    public function dbConfigure($host, $user, $password, $prefix) {
        $this->dbHost = $host;
        $this->dbUser = $user;
        $this->dbPassword = $password;
        $this->tablePrefix = $prefix;
    }

    //email
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    //root
    public function getRoot(){
        return $this->root;
    }

    public function setRoot($root){
        $this->$root = $root;
    }

    //tablePrefix
    public function getTablePrefix(){
        return $this->tablePrefix;
    }

    /**
     * Database connection function
     * @return PDO object that connects to the database
     */
    function pdo() {
        // This ensures we only create the PDO object once
        if(self::$pdo !== null) {
            return self::$pdo;
        }

        try {
            self::$pdo = new \PDO($this->dbHost,
                $this->dbUser,
                $this->dbPassword);
        } catch(\PDOException $e) {
            // If we can't connect we die!
            die("Unable to select database");
        }

        return self::$pdo;
    }

    private $email = '';        // Site owner email address
    private $dbHost = null;     // Database host name
    private $dbUser = null;     // Database user name
    private $dbPassword = null; // Database password
    private $tablePrefix = '';  // Database table prefix
    private $root = '';         // Site root
    private static $pdo = null; // the PDO object
}