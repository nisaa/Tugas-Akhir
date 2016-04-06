<?php
namespace App;

use PDO;

class User
{
    private $username;
    private $password;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $options = [
            'cost' => 12,
            'salt' => 'Ng&]t`ePf#P9J+e,5Z?U3#?AvzH%;4F|WOXhu4nb+M@>-0[N,8onaZ0#Rf^Yh#zE',
        ];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT, $options);

        $this->password = bcrypt($hashedPassword);
    }

    public function login()
    {
        // cek username sama password dari database
        // kalau eksis gimana
        // kalau ngga ada gimana
    }
}
