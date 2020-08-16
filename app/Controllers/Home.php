<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		return view('welcome_message');
	}

    //登陆
    public function login()
	{
		var_dump($_POST['name']);die;
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}