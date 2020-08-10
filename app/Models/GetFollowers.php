<?php

namespace App\Models;

class GetFollowers
{
    public $followers = [];

    function __construct($dbData)
    {
        foreach ($dbData as $entry) {
            array_push($this->followers, new User($entry));
        }
    }
}
