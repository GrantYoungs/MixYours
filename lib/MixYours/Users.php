<?php


namespace MixYours;

/**
 * Class Users
 * Users table in the Database
 * @package MixYours
 */
class Users extends Table
{
    /**
     * Users constructor.
     * @param Site $site The Site object
     */
    public function __construct(Site $site) {
        parent::__construct($site, "mixyours_user");
    }

    /**
     * Test for a valid login
     * @param string $email User's email address
     * @param string $password Password credential
     * @return User object upon success, null on failure
     */
    public function login($email, $password) {
        $sql =<<<SQL
SELECT * FROM $this->tableName
where email=?
SQL;

        // Prepare the SQL query
        $pdo = $this->pdo();
        $statement = $pdo->prepare($sql);

        // Execute the command. If nothing is returned, the user does not exist and return null;
        $statement->execute(array($email));
        if($statement->rowCount() === 0) {
            return null;
        }

        // User does exist, now check for password match //

        $row = $statement->fetch(\PDO::FETCH_ASSOC);

        // Get the encrypted password and salt from the record
        $hash = $row['password'];
        $salt = $row['salt'];

        // Ensure it's correct. If it's not, return null
        if($hash !== hash("sha256", $password . $salt)) {
            return null;
        }

        return new User($row);
    }
}