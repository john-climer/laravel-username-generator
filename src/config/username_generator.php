<?php

use App\User;
use TaylorNetwork\UsernameGenerator\Drivers\EmailDriver;
use TaylorNetwork\UsernameGenerator\Drivers\NameDriver;

return [

    'unique' => true,

    /*
     |----------------------------------------------------------------------------
     | Username Character Case
     |----------------------------------------------------------------------------
     |
     | Options are:
     |      - lower
     |          For all lowercase characters (ie: johnsmith)
     |
     |      - upper
     |          For all uppercase characters (ie: JOHNSMITH)
     |
     |   e   - mixed
     |          Allow mixed upper and lower cases for characters (ie: JohnSmith)
     |
     */
    'case' => 'lower',

    'separator' => '',

    'model' => User::class,

    'column' => 'username',

    'allowed_characters' => 'a-zA-Z ',

    'drivers' => [
        'name' => NameDriver::class,
        'email' => EmailDriver::class,
    ],
];
