<?php

/*
 */

namespace App\Models;

use dScribe\Core\AUser;

/**
 * Description of AdminUser
 *
 * @author topman
 */
class AdminUser extends AUser {

    public function getId() {
        return 1;
    }

    public function getRole() {
        return 'admin';
    }

}
