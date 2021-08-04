<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    // protected $useTimestamps = true;
    // protected $allowedFields = ['id_nilai', 'id_tahun', 'id_jurusan', 'id_siswa', 'semester_1', 'semester_2', 'semester_3', 'semester_4', 'semester_5'];
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function get_siswa()
    {
        return $this->db->table('siswa')->get()->getResultArray();
    }

    public function insert_siswa($data)
    {
        return $this->db->table('siswa')->insert($data);
    }

    public function edit_siswa($id_siswa)
    {
        return $this->db->table('siswa')->where('id_siswa', $id_siswa)->get()->getRowArray();
    }

    public function update_data($data, $id_siswa)
    {
        return $this->db->table('siswa')->update($data, array('id_siswa' => $id_siswa));
    }

    public function delete_data($id_siswa)
    {
        return $this->db->table('siswa')->delete(['id_siswa' => $id_siswa]);
    }
}
