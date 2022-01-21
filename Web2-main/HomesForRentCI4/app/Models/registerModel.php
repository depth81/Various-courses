<?php

namespace App\Models;

use CodeIgniter\Model;

class registerModel extends Model
{
    function addUser($nickname, $email, $password, $role){

        $sql = "INSERT INTO tblregister (nickname, email, password, role) VALUES ('{$nickname}', '{$email}', '{$password}', '{$role}')";
        $this->db->query($sql);
    }   

    function readUsers(){
        $sql = "SELECT * FROM tblregister";
        $users = $this->db->query($sql);
        return $users->getResult();
    }
}