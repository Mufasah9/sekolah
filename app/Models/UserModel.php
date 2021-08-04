<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function get_data()
    {
        return $this->db->table('user')->get()->getResultArray();
    }

    public function insert_data($data)
    {
        return $this->db->table('user')->insert($data);
    }

    public function edit_data($id_user)
    {
        return $this->db->table('user')->where('id_user', $id_user)->get()->getRowArray();
    }

    public function update_data($data, $id_user)
    {
        return $this->db->table('user')->update($data, array('id_user' => $id_user));
    }

    public function delete_data($id_user)
    {
        return $this->db->table('user')->delete(['id_user' => $id_user]);
    }
}
