<?php

namespace App\Controllers;

use App\Models\HomeModel;

class logOutController extends BaseController
{
	
	public function index()
	{	

		$session = session();
        $session->destroy();

        return redirect() -> to('/');
		
	}


}
