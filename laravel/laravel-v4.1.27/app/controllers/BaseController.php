<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class BaseController extends Controller {

	
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
