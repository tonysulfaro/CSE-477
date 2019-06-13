<?php


namespace Felis;


use function Sodium\add;

class User
{

    const ADMIN = "A";
    const STAFF = "S";
    const CLIENT = "C";
    const SESSION_NAME = 'user';
    /**
     * Constructor
     * @param $row Row from the user table in the database
     */
    public function __construct($row) {
        $this->id = $row['id'];
        $this->email = $row['email'];
        $this->name = $row['name'];
        $this->phone = $row['phone'];
        $this->address = $row['address'];
        $this->notes = $row['notes'];
        $this->joined = strtotime($row['joined']);
        $this->role = $row['role'];
    }

    /**
     * Determine if user is a staff member
     * @return bool True if user is a staff member
     */
    public function isStaff() {
        return $this->role === self::ADMIN ||
            $this->role === self::STAFF;
    }

    public function getId(){
        return $this->id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getNotes(){
        return $this->notes;
    }

    public function getJoined(){
        return $this->joined;
    }

    public function getRole(){
        return $this->role;
    }

    private $id;		// The internal ID for the user
    private $email;		// Email address
    private $name; 		// Name as last, first
    private $phone; 	// Phone number
    private $address;	// User address
    private $notes;		// Notes for this user
    private $joined;	// When user was added
    private $role;		// User role
}