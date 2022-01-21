<?php
namespace App\Models;

use CodeIgniter\Model;

class listAllUsersModel extends Model{

    function readAllUsers(){

        $sql = "SELECT * FROM tblprofiles";
        $apartments = $this->db->query($sql);
        return $apartments->getResult();
    }

}

?>