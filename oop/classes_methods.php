<?php

class User
{
    private $id;
    private $username;
    private $email;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function register()
    {
        echo 'User registered';
    }

    public function login()
    {
        $this->auth_user();
    }

    public function auth_user()
    {
        echo $this->username . ' is now logged in with password' . $this->password;
    }

    public function __destruct()
    {
        // echo 'Destructor called';
    }
}

$user = new User('Brian', '1234567891');

// $user->register();
// $user->login();
