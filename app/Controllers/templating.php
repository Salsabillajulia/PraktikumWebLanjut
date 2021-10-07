<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class templating extends BaseController
{
	public function index()
	{
	$data = [
		'title' => "Blog - Posts"
	];
	// echo view ('layouts/header', $data);
	// echo view ('layouts/navbar');
    // echo view ('v_posts');
    // echo view ('layouts/footer');
    return view('view_admin');
	}

	public function register()
	{
		$data = [
			'title' => "Register"
		];
		// echo view ('layouts/header', $data);
		// echo view ('layouts/navbar');
		// echo view ('v_posts');
		// echo view ('layouts/footer');
		return view('v_register', $data);
	}

}
