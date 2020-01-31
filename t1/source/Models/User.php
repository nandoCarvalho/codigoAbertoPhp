<?php

namespace Source\Models;

use Coffeecode\DataLayer\DataLayer;

class User extends DataLayer
{
        public function __construct()
        {
            parent::__construct("users", ["first_name", "last_name", "email", "passwd"]);
        }
}
