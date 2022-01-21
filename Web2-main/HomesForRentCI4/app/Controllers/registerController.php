<?php
namespace App\Controllers;
use App\Models\registerModel;

class registerController extends BaseController{

	public function index(){

		$session = session();
	
		//echo view('Layouts/header');
		echo view('register');
		echo view('Layouts/footer');

	}

	public function addUser(){
				
		$request = \Config\Services::request();
		$registerModel = new registerModel();

		$nickname = $request->getPost('nickname');
		$email = $request->getPost('email');
		$password = $request->getPost('password');
		$retype = $request->getPost('retype');
		$role = $request->getPost('role');

		helper(['form', 'url']);

		$input = $this->validate([
			'nickname' => 'required',
			'email' => 'required|valid_email|is_unique[tblregister.email]',
			'password' => 'required|min_length[3]',
			'retype' => 'required|matches[password]',
		]); 
		
		

		if(!$input) {
			
			echo view('Layouts/header');
			echo view('register');	
			
        }else{
			
			$session = session();
				
			$data = array(
				'email' => $email,
				'role' => $role,
				'loggedin' => true	
			);

			$session->set($data);

			$registerModel -> addUser($nickname, $email, $password, $role);
            return redirect() -> to('/userProfile');
        }

	}
}