<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
	
	public function index()
	{	

		echo view('myIndex');
		
	}

	public function verifyLogin(){

		$request = \Config\Services::request();
		$home = new HomeModel();

		$email = $request->getPost('email');
		$password = $request->getPost('password');

		helper(['form', 'url']);

		$input = $this->validate([
			'email' => 'required|valid_email',
			'password' => 'required|min_length[3]',
		]);

		if (!$input) {		
			echo view('myIndex');
        }else{
			$credentials =  $home -> verifyLogin($email, $password);
			if($credentials){	
				
				$session = session();
				
				$data = array(
					'email' => $email,
					'loggedin' => true	
				);

				$session->set($data);

				return redirect() -> to('/userProfileShow');

			}else{
				echo view('myIndex');
				
			}

        }

	}

}
