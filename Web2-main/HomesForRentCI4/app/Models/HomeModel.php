<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    function verifyLogin($email, $password){

        $sql = "SELECT * FROM tblregister WHERE email = '{$email}' AND password = '{$password}'";
        $emailAndPwd = $this->db->query($sql);
        return $emailAndPwd->getResult();
    }

}