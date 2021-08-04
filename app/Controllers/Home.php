<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Halaman Admin',
			'isi' => 'admin/home'
		];
		echo view('admin/layout/wrapper', $data);
	}
}
