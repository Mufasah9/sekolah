<?php

namespace App\Models;

use CodeIgniter\Model;

class MatapelajaranModel extends Model
{
    protected $table = 'matapelajaran';
    protected $primaryKey = 'id_matapelajaran';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_matapelajaran', '', 'nama_matapelajaran'];
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function get_matapelajaran()
    {
        return $this->db->table('matapelajaran')->get()->getResultArray();
    }
}
