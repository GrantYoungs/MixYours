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
}