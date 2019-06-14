<?php

namespace Felis;

/**
 * Manage users in our system.
 */
class Users extends Table
{

    /**
     * Constructor
     * @param $site The Site object
     */
    public function __construct(Site $site)
    {
        parent::__construct($site, "user");
    }

    /**
     * Test for a valid login.
     * @param $email User email
     * @param $password Password credential
     * @return User object if successful, null otherwise.
     */
    public function login($email, $password)
    {
        $sql = <<<SQL
SELECT * from $this->tableName
where email=? and password=?
SQL;

        $pdo = $this->pdo();
        $statement = $pdo->prepare($sql);

        $statement->execute(array($email, $password));
        if ($statement->rowCount() === 0) {
            return null;
        }

        return new User($statement->fetch(\PDO::FETCH_ASSOC));
    }

    /**
     * Get a user based on the id
     * @param $id ID of the user
     * @return User object if successful, null otherwise.
     */
    public function get($id)
    {
        $sql = <<< SQL
select * from $this->tableName
where id=?
SQL;
        $pdo = $this->pdo();
        $statement = $pdo->prepare($sql);

        $statement->execute(array($id));
        if ($statement->rowCount() === 0) {
            return null;
        }
        return new User($statement->fetch(\PDO::FETCH_ASSOC));
    }

    /**
     * Modify a user record based on the contents of a User object
     * @param User $user User object for object with modified data
     * @return true if successful, false if failed or user does not exist
     */
    public function update(User $user)
    {

        // see if user exists
        $user_exists = $this->get($user->getId());
        if (!$user_exists) {
            return false;
        }

        // user exists, get id and update information
        $user_id = $user->getId();

        $sql = <<< SQL
update $this->tableName
set email = ?, name = ?, phone = ?, address = ?, notes = ?, role = ?
where id = ?
SQL;

        $pdo = $this->pdo();


        try {
            $statement = $pdo->prepare($sql);
            $ret = $statement->execute(array($user->getEmail(), $user->getName(), $user->getPhone(), $user->getAddress(), $user->getNotes(), $user_id));
            return $ret;
        } catch (\PDOException $e) {
            // do something when the exception occurs...
            return false;
        }

    }

}