<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController
{
	protected $UserModel;
	public function __construct()
	{
		$this->UserModel = new UserModel();
	}
	public function index()
	{
		$data = [
			'title' => 'Data Pengguna',
			'user' => $this->UserModel->get_data(),
			'isi' => 'admin/user/v_user'
		];
		echo view('admin/layout/wrapper', $data);
	}

	public function add_user()
	{
		$data = [
			'title' => 'Tambah Data Pengguna',
			'isi' => 'admin/user/add_user',
			'validation' => \Config\Services::validation()
		];
		echo view('admin/layout/wrapper', $data);
	}

	public function save()
	{
		if (!$this->validate([
			'nama' => 'required',
			'username' => 'required',
			'password' => 'required',
			'level' => 'required'
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to(base_url('user/add_user'))->withInput()->with('validation', $validation);
		}
		$data = [
			'nama' => $this->request->getPost('nama'),
			'username' => $this->request->getPost('username'),
			'password' => $this->request->getPost('password'),
			'level' => $this->request->getPost('level')
		];
		$this->UserModel->insert_data($data);
		session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
		return redirect()->to(base_url('user'));
	}

	public function edit($id_user)
	{

		$data = [
			'title' => 'Edit Data Pengguna',
			'user' => $this->UserModel->edit_data($id_user),
			'isi' => 'admin/user/edit_user'
		];
		echo view('admin/layout/wrapper', $data);
	}

	public function update($id_user)
	{

		$data = [
			'nama' => $this->request->getPost('nama'),
			'username' => $this->request->getPost('username'),
			'password' => $this->request->getPost('password'),
			'level' => $this->request->getPost('level')
		];
		$this->UserModel->update_data($data, $id_user);
		session()->setFlashdata('success', 'Data Berhasil Diperbarui');
		return redirect()->to(base_url('user'));
	}

	public function delete($id_user)
	{
		$this->UserModel->delete_data($id_user);
		session()->setFlashdata('success', 'Data Berhasil Dihapus');
		return redirect()->to(base_url('user'));
	}
}
