<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SiswaModel;
use App\Models\JurusanModel;
use App\Models\TahunModel;
use App\Models\NilaiModel;
use App\Models\MatapelajaranModel;

class Nilai extends BaseController
{
    protected $NilaiModel;
    public function __construct()
    {
        // $this->SiswaModel = new SiswaModel();
        $this->JurusanModel = new JurusanModel();
        $this->TahunModel = new TahunModel();
        $this->NilaiModel = new NilaiModel();
        $this->MatapelajaranModel = new MatapelajaranModel();
    }
    public function index()
    {
        $this->JurusanModel = new JurusanModel();
        $this->TahunModel = new TahunModel();
        $this->NilaiModel = new NilaiModel();
        $data = [
            'title' => 'Data Siswa',

            'isi' => 'admin/siswa/v_siswa'
        ];
        echo view('admin/layout/wrapper', $data);
    }




    public function add_nilai()
    {
        $data = [
            'title' => 'Tambah Data Nilai',
            'isi' => 'admin/siswa/add_nilai',
            'jurusan' => $this->JurusanModel->get_jurusan(),
            'tahun' => $this->TahunModel->get_tahun(),
            'matapelajaran' => $this->MatapelajaranModel->get_matapelajaran(),
        ];
        echo view('admin/layout/wrapper', $data);
    }
}
