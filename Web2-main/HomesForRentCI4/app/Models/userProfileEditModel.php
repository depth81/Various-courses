<?php

namespace App\Models;

use CodeIgniter\Model;

class userProfileEditModel extends Model
{

    function editProfile($myname, $country, $city, $personalintro, $picofme, $email){

        $sql = "UPDATE tblprofiles SET myname = '{$myname}', country = '{$country}', city = '{$city}', personalintro = '{$personalintro}', picofme = '{$picofme}' WHERE email = '{$email}'";

        $this->db->query($sql);

    }


}


