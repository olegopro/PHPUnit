<?php

namespace App\Models;

use http\Exception\InvalidArgumentException;

class User
{
    private $name;
    private $email;
    private $pass;
    private $age;
    private $observers;

    public function __construct($name = NULL, $email = NULL, $pass = NULL, $age = NULL)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->age = $age;
    }

    public function save(Db $db): bool
    {
        if ($db->connect('localhost', 'user', 'pass', 'db')) {
            $db->query('SELECT');

            return TRUE;
        }

        return FALSE;
    }

    public function attach(UserObserver $userObserver)
    {
        $this->observers[] = $userObserver;
    }

    public function update()
    {
        $this->notify('update');
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        if (empty($this->email)) {
            throw new InvalidArgumentException('Error email');
        }

        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass): void
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    private function notify($string)
    {
        foreach ($this->observers as $observer) {
            $observer->update($string);
        }
    }
}
