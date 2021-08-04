<?php

namespace App\Models;

use CodeIgniter\Model;

class TahunModel extends Model
{
    protected $table = 'tahun';
    protected $primaryKey = 'id_tahun';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_tahun', 'tahun'];
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function get_tahun()
    {
        return $this->db->table('tahun')->get()->getResultArray();
    }
}
