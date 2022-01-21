<?php
namespace App\Models;

use CodeIgniter\Model;

class listUserDetailsModel extends Model{

    function readUserDetails($index){
        
        $sql = "SELECT * FROM tblprofiles WHERE id=$index";
        $userDetails = $this->db->query($sql);
        return $userDetails->getResult();
        
    }

}

?>