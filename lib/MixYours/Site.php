<?php
/**
 * Object to represent our website.
 */

namespace MixYours;

use PDO;
use PDOException;

class Site
{
    /**
     * Site constructor
     */
    public function __construct() {

    }

    /**
     * Returns the Site owner email address
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Returns the Site root
     * @return string
     */
    public function getRoot() {
        return $this->root;
    }

    /**
     * Returns the database table prefix
     * @return string
     */
    public function getTablePrefix() {
        return $this->tablePrefix;
    }

    /**
     * Sets the email address of the Site
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Sets the root path of the Site
     * @param string $root
     */
    public function setRoot($root) {
        $this->root = $root;
    }

    /**
     * Configures the database
     * @param string $host
     * @param string $user
     * @param string $password
     * @param string $prefix
     */
    public function dbConfigure($host, $user, $password, $prefix) {
        $this->dbHost = $host;
        $this->dbUser = $user;
        $this->dbPassword = $password;
        $this->tablePrefix = $prefix;
    }

    /**
     * Creates a connection with the database
     * @return PDO PDO object that connects to the database
     */
    function pdo() {
        // This ensures we only create the PDO object once
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        // Connect to the PDO so we can create a connect to the database
        try {
            self::$pdo = new PDO($this->dbHost,
                $this->dbUser,
                $this->dbPassword);
        } catch(PDOException $e) {
            // Cannot connect
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
    private static $pdo = null; // The PDO object
}