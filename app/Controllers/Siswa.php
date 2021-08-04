<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SiswaModel;
use App\Models\JurusanModel;
use App\Models\TahunModel;
use App\Models\NilaiModel;

class Siswa extends BaseController
{
    protected $SiswaModel;
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
        $this->JurusanModel = new JurusanModel();
        $this->TahunModel = new TahunModel();
        $this->NilaiModel = new NilaiModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Siswa',
            'siswa' => $this->SiswaModel->get_siswa(),
            'isi' => 'admin/siswa/v_siswa'
        ];
        echo view('admin/layout/wrapper', $data);
    }

    public function add_siswa()
    {
        $data = [
            'title' => 'Tambah Data Siswa',
            'isi' => 'admin/siswa/add_siswa',
            'jurusan' => $this->JurusanModel->get_jurusan(),
            'tahun' => $this->TahunModel->get_tahun(),
            'validation' => \Config\Services::validation()
        ];
        echo view('admin/layout/wrapper', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nisn' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nisn belum diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama belum diisi'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jurusan belum dipilih'
                ]
            ],
            'tahun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'tahun belum dipilih'
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('siswa/add_siswa'))->withInput()->with('validation', $validation);
        }

        $data = [
            'nisn' => $this->request->getPost('nisn'),
            'nama_siswa' => $this->request->getPost('nama'),
            'id_jurusan' => $this->request->getPost('jurusan'),
            'id_tahun' => $this->request->getPost('tahun'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat')
        ];
        $this->SiswaModel->insert_siswa($data);
        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('siswa/add_siswa'));
    }

    public function detail($id_siswa, $id_nilai)
    {

        $data = [
            'title' => 'Detail Siswa',
            'siswa' => $this->UserModel->edit_siswa($id_siswa),
            'nilai' => $this->NilaiModel->edit_nilai($id_nilai),
            'isi' => 'admin/siswa/v_siswa'
        ];
        echo view('admin/layout/wrapper', $data);
    }
}
