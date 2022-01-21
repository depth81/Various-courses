<?php

namespace App\Models;

use CodeIgniter\Model;

class ownerAddAptModel extends Model
{
    function addApartment($country, $city, $address, $location2, $rooms, $price, $review, $pic1, $pic2, $pic3, $pic4, $pic5, $email){

        $sql = "INSERT INTO tblowneraddapt (country, city, address, location, rooms, price, review, pic1, pic2, pic3, pic4, pic5, email) VALUES ('{$country}', '{$city}', '{$address}', '{$location2}', '{$rooms}', '{$price}', '{$review}', '{$pic1}', '{$pic2}', '{$pic3}', '{$pic4}', '{$pic5}', '{$email}')";
        $this->db->query($sql);
    }

}