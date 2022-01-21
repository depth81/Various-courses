<?php
namespace App\Models;

use CodeIgniter\Model;

class ownerListAptModel extends Model{

    function readApartments($email){
        $sql = "SELECT * FROM tblowneraddapt WHERE email = '{$email}'";
        $apartments = $this->db->query($sql);
        return $apartments->getResult();
    }

    function readApartmentDetails($index){
        $sql = "SELECT * FROM tblowneraddapt WHERE id=$index";
        $apartmentDetails = $this->db->query($sql);
        return $apartmentDetails->getResult();
    }

    function editApartment($index, $country, $city, $address, $location2, $rooms, $price, $review, $pic1, $pic2, $pic3, $pic4, $pic5){
        
        $sql = "UPDATE tblowneraddapt SET country = '{$country}', city = '{$city}', address = '{$address}', location = '{$location2}',
        rooms = '{$rooms}', price = '{$price}', review = '{$review}', pic1 = '{$pic1}', pic2 = '{$pic2}', pic3 = '{$pic3}',
        pic4 = '{$pic4}', pic5 = '{$pic5}'  WHERE id=$index";

        $editApt = $this->db->query($sql);
        return $editApt->getResult();
    }

    function deleteApartment($id){
        $sql = "DELETE FROM tblowneraddapt WHERE id={$id}";
        $this->db->query($sql);
    }

}


