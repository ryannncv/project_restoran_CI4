<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Menu_M;
use App\Models\kategori_M;

class detail extends BaseController
{
	public function index($id = null)
	{
        $model = new Menu_M();
        $menu = $model->find($id);
        

        $modell = new kategori_M();
        $kategori = $modell->findAll($id);

        $data = [
            'menu' => $menu,
            'kategori' => $kategori
        ];

        return view('detail',$data);



	
	}


	//--------------------------------------------------------------------

}
