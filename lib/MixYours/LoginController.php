<?php


namespace MixYours;

/**
 * Class LoginController
 * Controller to handle user login
 * @package MixYours
 */
class LoginController extends Controller {
    public function __construct(Site $site, array &$session, array $post) {
        parent::__construct($site);

        // Create a Users object to access the table of Users
        $usersTable = new Users($site);

        $email = strip_tags($post['email']);
        $password = strip_tags($post['password']);

        // Retrieve the user account from the login attempt and set it in the session
        $user = $usersTable->login($email, $password);
        $session[User::SESSION_NAME] = $user;

        $root = $site->getRoot();
        if($user === null) {
            // Login failed, redirect the user back to the login page
            $this->redirect = "$root/index.php?e";  ///// DEFINITELY NEED TO CHANGE THIS TO THE APPROPRIATE PAGE WHEN DONE
            $session['e'] = "Invalid login credentials";
        }
        else {
            $this->redirect = "$root/goodlogin.php";
        }
    }
}