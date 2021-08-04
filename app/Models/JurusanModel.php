<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'id_jurusan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_jurusan', 'nama_jurusan'];
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function get_jurusan()
    {
        return $this->db->table('jurusan')->get()->getResultArray();
    }
}
