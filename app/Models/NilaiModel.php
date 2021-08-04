<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    protected $table = 'nilai';
    protected $primaryKey = 'id_nilai';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_nilai', 'id_tahun', 'id_jurusan', 'id_siswa', 'semester_1', 'semester_2', 'semester_3', 'semester_4', 'semester_5'];
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function get_nilai()
    {
        return $this->db->table('nilai')->get()->getResultArray();
    }

    public function edit_nilai($id_nilai)
    {
        return $this->db->table('nilai')->where('id_nilai', $id_nilai)->get()->getRowArray();
    }

    public function update_data($data, $id_nilai)
    {
        return $this->db->table('nilai')->update($data, array('id_nilai' => $id_nilai));
    }

    public function delete_data($id_nilai)
    {
        return $this->db->table('nilai')->delete(['id_nilai' => $id_nilai]);
    }
}
