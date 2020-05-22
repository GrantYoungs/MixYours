<?php
/**
 * Function to localize our site
 * @param $site Site object
 */
return function(\MixYours\Site $site) {
    // Set the time zone
    date_default_timezone_set('America/Detroit');

    $site->setEmail('youngsgr@cse.msu.edu');
    $site->setRoot('/~youngsgr/mixyours');
    $site->dbConfigure('mysql:host=mysql-user.cse.msu.edu;dbname=youngsgr',
        'youngsgr',       // Database user
        'GrantCSE',     // Database password
        '');            // Table prefix
};