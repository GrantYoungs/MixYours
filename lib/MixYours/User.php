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

    
}