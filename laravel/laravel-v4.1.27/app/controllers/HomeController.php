<?php

use Illuminate\Support\Facades\View;

class HomeController extends BaseController {


	public function showWelcome()
	{
		return View::make('hello');
	}

}
