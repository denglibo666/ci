<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo "string"; die;
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}