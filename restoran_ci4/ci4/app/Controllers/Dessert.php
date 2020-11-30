<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\dessert_u;

class Dessert extends BaseController
{
	public function index()
	{
		$model = new dessert_U();	
		$data =
		[
			'dsrt' => $model->find()
		];
		return view("dessert",$data);
	}

	//--------------------------------------------------------------------

}

