<?php

namespace App\Models;

use CodeIgniter\Model;

class userProfileShowModel extends Model
{
    function userProfileShow($email){
        $sql = "SELECT * FROM tblprofiles WHERE email='{$email}'";
        $profiles = $this->db->query($sql);
        return $profiles->getResult();
    }

    function getUserRole($email){
        $sql = "SELECT role FROM tblregister WHERE email='{$email}'";
        $role = $this->db->query($sql);
        return $role->getResult();
    }

}


