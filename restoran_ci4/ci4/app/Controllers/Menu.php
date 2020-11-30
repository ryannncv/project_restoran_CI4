<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Menu_M;

class Menu extends BaseController
{
	public function index()
	{
		$model = new Menu_M();	
		$data =
		[
			'menu' => $model
		];
		return view('template_user/user');
	}

	//--------------------------------------------------------------------

}
