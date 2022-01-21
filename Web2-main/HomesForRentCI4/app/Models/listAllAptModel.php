<?php
namespace App\Models;

use CodeIgniter\Model;

class listAllAptModel extends Model{

    function readAllApartments(){

        $sql = "SELECT * FROM tblowneraddapt";
        $apartments = $this->db->query($sql);
        return $apartments->getResult();
    }

    function readApartmentDetails($index){
        $sql = "SELECT * FROM tblowneraddapt WHERE id=$index";
        $apartmentDetails = $this->db->query($sql);
        return $apartmentDetails->getResult();
    }

}

?>