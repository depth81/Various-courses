<?php

namespace App\Models;

use CodeIgniter\Model;

class userProfileModel extends Model
{
    function addProfile($myname, $country, $city, $personalintro, $picofme, $email){

        $sql = "INSERT INTO tblprofiles (myname, country, city, personalintro, picofme, email) VALUES ('{$myname}', '{$country}', '{$city}', '{$personalintro}', '{$picofme}' ,'{$email}')";
        $this->db->query($sql);
    }   

    function readProfiles(){
        $sql = "SELECT * FROM tblprofiles";
        $profiles = $this->db->query($sql);
        return $profiles->getResult();
    }

}


