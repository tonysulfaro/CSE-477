<?php
/**
 * @file
 * This is the main system class for the Lights game.
 * It is what is stored in the session.
 */

namespace Lights;

/**
 * This is the main system class for the Lights game.
 * It is what is stored in the session.
 */
class Lights
{
    /**
     * Lights constructor.
     * @param string $dir Root directory for the site.
     */
    public function __construct($dir)
    {
        $this->games = new Games($this, $dir);
    }

    /**
     * Get the games object
     * @return Games object
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * Set a message that appears on a page.
     *
     * This is used for error messages.
     * @param $message Message string to set
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return Get any current message
     */
    public function getMessage()
    {
        return $this->message;
    }


    /**
     * Set the player's name
     * @param $player Player name
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }

    /**
     * @return string Player name
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set the current game based on a filename
     * @param string $file File name for the game to set
     * @return true if successful
     */
    public function setGameByFile($file)
    {
        $this->game = $this->games->getGame($file);
        return $this->game !== null;
    }

    /**
     * Clear pointer for current game. No game will be active.
     */
    public function clearGame()
    {
        $this->game = null;
    }

    /**
     * Get the currently active game
     * @return Game object
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * If the Show Lighted option selected?
     * @return bool True if so
     */
    public function isShowLighted()
    {
        return $this->showLighted;
    }

    /**
     * @param bool $showLighted
     */
    public function setShowLighted($showLighted)
    {
        $this->showLighted = $showLighted;
    }

    /**
     * @return bool
     */
    public function isShowCompleted()
    {
        return $this->showCompleted;
    }

    /**
     * @param bool $showCompleted
     */
    public function setShowCompleted($showCompleted)
    {
        $this->showCompleted = $showCompleted;
    }

    public function setUserCreated($bool)
    {
        $this->userCreated = $bool;
    }

    public function getUserCreated()
    {
        return $this->userCreated;
    }

    /**
     * @return bool
     */
    public function getConfirmUser()
    {
        return $this->confirmUser;
    }

    /**
     * @param bool $confirmUser
     */
    public function setConfirmUser($confirmUser)
    {
        $this->confirmUser = $confirmUser;
    }

    /**
     * @return bool
     */
    public function isUserValidated()
    {
        return $this->userValidated;
    }

    /**
     * @param bool $userValidated
     */
    public function setUserValidated($userValidated)
    {
        $this->userValidated = $userValidated;
    }

    /**
     * @return null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param null $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    public function random_salt($len = 16){
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789`~!@#$%^&*()-=_+';
        $l = strlen($chars)-1;
        $str = '';

        for($i = 0; $i<$len; $i++){
            $str .= $chars[rand(0, $l)];
        }

        return $str;
    }

    public function addUser($email, $pass){
        $sql = <<< SQL
insert into logins (email, password, salt)
values (?,?,?)
SQL;

        $salt = $this->random_salt();
        $hashedPassword = hash("sha256", $pass.$salt);

        $statement = $this->pdo()->prepare($sql);
        $statement->execute(array($email, $hashedPassword, $salt));
    }

    public function authenticateUser($email, $pass)
    {

        $sql = <<< SQL
select * from logins
where email=?
SQL;

        $statement = $this->pdo()->prepare($sql);
        $statement->execute(array($email));
        $row = $statement->fetch(\PDO::FETCH_ASSOC);

        // encrypted password and salt from record
        $hash = $row['password'];
        $salt = $row['salt'];

        // validate
        if ($hash !== hash("sha256", $pass.$salt)) {
            return false;
        }
        return true;
    }

    function pdo()
    {
        // This ensures we only create the PDO object once
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        try {
            self::$pdo = new \PDO($this->dbHost,
                $this->dbUser,
                $this->dbPassword);
        } catch (\PDOException $e) {
            // If we can't connect we die!
            die("Unable to select database");
        }

        return self::$pdo;
    }

    // ye olde hardcode here for db credentials, they are server side so it makes it ok
    private static $pdo = null; // the PDO object
    private $dbHost = 'mysql:host=mysql-user.cse.msu.edu;dbname=sulfaroa';     // Database host name
    private $dbUser = 'sulfaroa';     // Database user name
    private $dbPassword = 'A52995491';

    private $games;
    private $game = null;       // The current game
    private $message = null;    // Any error message for the pages?
    private $player = "";        // Player name

    private $user = null;


    private $showLighted = false;
    private $showCompleted = false;

    private $userCreated = false;
    private $confirmUser = false;
    private $userValidated = false;


}