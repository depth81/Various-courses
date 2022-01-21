<?php
namespace App\Controllers;
use App\Models\listAllAptModel;
use App\Controllers\BaseController;

class listAllAptController extends BaseController{

	public function index(){

		$session = session();
		$loggedin = $session->get('loggedin');

		if($loggedin === true){

			$apartment = new listAllAptModel();
			$results = $apartment->readAllApartments();
			$data = array(
				"apartments" => $results,
			);
			
			echo view('Layouts/header');
			echo view('listAllApt', $data);
			echo view('Layouts/footer');
			
		}else{

			return redirect() -> to('/');
		
		}

	}
	

	public function listAllAptDetails($index){

		$session = session();
		$loggedin = $session->get('loggedin');

		if($loggedin === true){
			
			$details = new listAllAptModel();
			$result = $details -> readApartmentDetails($index);
			$data = array(
				"apartmentDetails" => $result,
			);
			echo view('Layouts/header');
			echo view('listAllAptDetails', $data);
			echo view('Layouts/footer');

		}else{
			
			return redirect() -> to('/');
		
		}	
		
	}

}