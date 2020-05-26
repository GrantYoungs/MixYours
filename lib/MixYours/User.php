<?php
/**
 * Object to represent a User from the database
 */

namespace MixYours;


class User {
    const SESSION_NAME = 'user';

    private $id;                // ID of the user from the DB
    private $email = "";        // Email address of the user
    private $name = "";         // User's name
    private $joined = "";       // When the user joined
    private $profilePicture;    // The profile picture of the user

    /**
     * User constructor.
     * @param $row Row from the user table in the database
     */
    public function __construct($row) {
        $this->id = $row['id'];
        $this->email = $row['email'];
        $this->name = $row['name'];
        $this->joined = $row['joined'];
        if(isset($row['profilepicture'])) $this->profilePicture = $row['profilepicture'];
    }

    /**
     * @return int ID of the User
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string Email address of the user
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param string
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return string Name of the user
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string The date the user joined
     */
    public function getJoined() {
        return $this->joined;
    }

    /**
     * @param string
     */
    public function setJoined($joined) {
        $this->joined = $joined;
    }

    /**
     * @return mixed The profile picture of the user
     */
    public function getProfilePicture() {
        return $this->profilePicture;
    }

    /**
     * @param $picture The profile picture for the user
     */
    public function setProfilePicture($picture) {
        $this->profilePicture = $picture;
    }
}