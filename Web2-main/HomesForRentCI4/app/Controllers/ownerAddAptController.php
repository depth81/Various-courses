<?php
namespace App\Controllers;
use App\Models\ownerAddAptModel;

class ownerAddAptController extends BaseController{

	public function index(){

		$session = session();
		$loggedin = $session->get('loggedin');
		$role = $session->get('role');

		if($loggedin === true){

			if($role == "HOST"){

				echo view('Layouts/header');
				echo view('ownerAddApt');
				echo view('Layouts/footer');

			}else{

				return redirect() -> to('/listAllApt');

			}
		

		}else{ //user is not loggedIn

			return redirect() -> to('/');

		}

		
	}

	public function addApartment(){

		$session = session();

		$request = \Config\Services::request();
		$apartment = new ownerAddAptModel();
		
		$country = $request->getPost('country');
		$city = $request->getPost('city');
		$address = $request->getPost('address');
		$location2 = $request->getPost('location2');
		$rooms = $request->getPost('rooms');
		$price = $request->getPost('price');
		$review = $request->getPost('review');
		/* $pic1 = $request->getPost('pic1');
		$pic2 = $request->getPost('pic2');
		$pic3 = $request->getPost('pic3');
		$pic4 = $request->getPost('pic4');
		$pic5 = $request->getPost('pic5'); */
		
		$file1 = $request->getFile('pic1');
		$imageName1 = $file1 -> getRandomName();
		$pic1 = "";
		if ($file1->isValid() && ! $file1->hasMoved())
		{
			$file1->move('./uploads/images/', $imageName1);
			$pic1 = base_url() . "/uploads/images/" . $imageName1;
		}

		$file2 = $request->getFile('pic2');
		$imageName2 = $file2 -> getRandomName();
		$pic2 = "";
		if ($file2->isValid() && ! $file2->hasMoved())
		{
			$file2->move('./uploads/images/', $imageName2);
			$pic2 = base_url() . "/uploads/images/" . $imageName2;
		}

		$file3 = $request->getFile('pic3');
		$imageName3 = $file3 -> getRandomName();
		$pic3 = "";
		if ($file3->isValid() && ! $file3->hasMoved())
		{
			$file3->move('./uploads/images/', $imageName3);
			$pic3 = base_url() . "/uploads/images/" . $imageName3;
		}

		$file4 = $request->getFile('pic4');
		$imageName4 = $file4 -> getRandomName();
		$pic4 = "";
		if ($file4->isValid() && ! $file4->hasMoved())
		{
			$file4->move('./uploads/images/', $imageName4);
			$pic4 = base_url() . "/uploads/images/" . $imageName4;
		}

		$file5 = $request->getFile('pic5');
		$imageName5 = $file5 -> getRandomName();
		$pic5 = "";
		if ($file5->isValid() && ! $file5->hasMoved())
		{
			$file5->move('./uploads/images/', $imageName5);
			$pic5 = base_url() . "/uploads/images/" . $imageName5;
		}

		helper(['form', 'url']);

		$input = $this->validate([
			'country' => 'required|alpha_space',
			'city' => 'required|alpha_space',
			'address' => 'required',
			'location2' => 'required',
			'rooms' => 'required',
			'price' => 'required',
			'review' => 'required',
		]); 

		if (!$input) {
			
			echo view('Layouts/header');
			echo view('ownerAddApt');	
			echo view('Layouts/footer');
			
		} else {
				
			$email = $session->get('email');
			$apartment -> addApartment($country, $city, $address, $location2, $rooms, $price, $review, $pic1, $pic2, $pic3, $pic4, $pic5, $email);
			return redirect() -> to('/ownerListApt');

		}	

	}

}