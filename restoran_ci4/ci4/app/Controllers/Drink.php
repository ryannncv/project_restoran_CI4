<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\drink_U;

class Drink extends BaseController
{
	public function index()
	{
		$model = new drink_U();	
		$data =
		[
			'drk' => $model->find()
		];
		return view("drink",$data);
	}

	//--------------------------------------------------------------------

}

