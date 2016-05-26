<?php
namespace App;

use PDO;

class User
{
    private $username = "";
    private $password = "";
    private $fullname = "";
    private $email = "";
    private $address = "";
    private $phone = "";
    private $picture = "";
    private $status = "pencari_kos"; // pencari_kos/pemilik_kos

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

        //$this->password = bcrypt($hashedPassword);
    }

    public function login()
    {
        // cek username sama password dari database
        // kalau eksis gimana
        // kalau ngga ada gimana
    }

    public function register()
    {
        if($this->status == "pencari_kos") {
            $query = "INSERT INTO members";
        } else($this->status == "pemilik_kos") {
            $query = "INSERT INTO pemilik_kos";
        }

        $query .= "(username, password, email, full_name) VALUES(:username, :password, :email, :fullname)";
    }
}
