<?php
namespace App\Controllers;
use App\Models\userProfileModel;

class userProfileController extends BaseController{

	public function index(){

		$session = session();

		$loggedin = $session -> get('loggedin');

		if($loggedin === true){
			
			echo view('Layouts/header');
			echo view('userProfile');
			echo view('Layouts/footer');

		}else{

			return redirect() -> to('/');

		}
		
	}

	public function addProfile(){

		$request = \Config\Services::request();
		$profile = new userProfileModel();

		$myname = $request->getPost('myname');
		$country = $request->getPost('country');
		$city = $request->getPost('city');
		$personalintro = $request->getPost('personalintro');
		//$picofme = $request->getPost('picofme');
		
		$file = $request->getFile('picofme');
		$imageName = $file -> getRandomName();
		$imageURL = "";
		if ($file->isValid() && ! $file->hasMoved())
		{
			$file->move('./uploads/images/', $imageName);
			$imageURL = base_url() . "/uploads/images/" . $imageName;
		}
		
		$session = session();

		$email = $session->get('email');

		helper(['form', 'url']);

		$input = $this->validate([
			'myname' => 'required|alpha_space',
			'country' => 'required|alpha_space',
			'city' => 'required|alpha_space',
			'personalintro' => 'required',
		]); 

		if (!$input) {
			echo view('Layouts/header');
			echo view('userProfile');	
			echo view('Layouts/footer');
			
        } else {
			
			$profile -> addProfile($myname, $country, $city, $personalintro, $imageURL, $email);
            return redirect() -> to('/userProfileShow');
        }

	}

}