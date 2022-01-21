<?php
namespace App\Controllers;
use App\Models\listUserDetailsModel;

class listUserDetailsController extends BaseController{

	public function index(){

		$session = session();

        $request = \Config\Services::request();
		$id = $request->getGet('id');
		$loggedin = $session->get('loggedin');

		if($loggedin === true){
			
			$userModel = new listUserDetailsModel();
			$results = $userModel->readUserDetails($id);
			
			$data = array(
				"user" => $results,
			);
		
			echo view('Layouts/header');
			echo view('listUserDetails', $data);
			echo view('Layouts/footer');
			
		}else{

			return redirect() -> to('/');
		
		}

	}

}