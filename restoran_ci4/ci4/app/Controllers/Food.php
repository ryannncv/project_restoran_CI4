<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\food_U;

class Food extends BaseController
{
	public function index()
	{
		$model = new food_U();	
		$data =
		[
			'fd' => $model->find()
		];
		return view("food",$data);
	}

	//--------------------------------------------------------------------

}

