<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		echo "<h1>Belajar ci4</h1>";
	}

	public function select()
	{
		echo "Menampilkan semua data";
	}

	public function selectwhere($id = null){
		echo "Menampilkan data yang dipilih";
	}

	public function formInsert()
	{
		echo "Menampilkan form insert";
	}

	public function formUpdate()
	{
		echo "Menampilkan form update";
	}

	public function update($id = null)
	{
		echo "proses update data : $id";
	}

	public function delete($id = null)
	{
		echo "proses delete data";
	}
	//--------------------------------------------------------------------

}
