<?php

namespace App\Models;

class Db
{
    private $mysqli = null;

    public function connect($host, $user, $pass, $db)
    {
        $this->mysqli = new \mysqli($host, $user, $pass, $db);
        if($this->mysqli->connect_error) {
            return false;
        }

        return true;
    }

    public function query($query)
    {
        $this->mysqli->query($query);
    }
}
