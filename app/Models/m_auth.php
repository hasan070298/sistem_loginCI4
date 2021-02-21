<?php

namespace App\Models;

use CodeIgniter\Model;

class m_auth extends Model
{
    public function save_register($data)
    {
        $this->db->table('tblm_users')->insert($data);
    }
    public function login($email, $password)
    {
        return $this->db->table('tblm_users')->where([
            'email' => $email,
            'password' => $password,
        ])->get()->getRowArray();
    }
}
