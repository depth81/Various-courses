<?php
namespace App\Controllers;
use App\Models\listAllUsersModel;

class listAllUsersController extends BaseController{

	public function index(){

		$session = session();
		$loggedin = $session->get('loggedin');

		if($loggedin === true){

			$allUsers = new listAllUsersModel();

			$results = $allUsers->readAllUsers();
				$data = array(
					"users" => $results,
				);
		
			echo view('Layouts/header');
			echo view('listAllUsers', $data);
			echo view('Layouts/footer');
			
		}else{

			return redirect() -> to('/');
		
		}

	}

}