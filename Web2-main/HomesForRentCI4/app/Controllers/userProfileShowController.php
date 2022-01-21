<?php
namespace App\Controllers;

use App\Models\userProfileModel;
use App\Models\userProfileShowModel;

class userProfileShowController extends BaseController{

	public function index(){

		$session = session();

		$email = $session->get('email');
		$loggedin = $session->get('loggedin');

		if($loggedin === true){

			$profile = new userProfileShowModel();
			$userRole = new userProfileShowModel();

			$uRole2 = $userRole -> getUserRole($email);
			$uRole = $uRole2[0]->role;

			$session->set('role', $uRole);

			$result = $profile -> userProfileShow($email);
			$data = array(
				"userProfile" => $result,
			);
			
			echo view('Layouts/header');
			echo view('userProfileShow', $data);
			echo view('Layouts/footer');
			
		}else{

			return redirect() -> to('/');

		}

	}


}