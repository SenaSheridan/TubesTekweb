<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    // ====================================================== //
    //         START----> INI UNTUK ADMIN                     //
    //========================================================//

    // BAGIAN ADMIN

    public function getDataAdmin()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->join('level', 'admin.id_level = level.id_level');
        return $this->db->get()->result_array();
    }

    public function getDataAdmin_id($id)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->join('level', 'admin.id_level = level.id_level');
        $this->db->where(['id_admin' => $id]);
        return $this->db->get()->row_array();
    }

    //BAGIAN USER

    public function getDataUser()
    {
        $this->db->select('*');
        $this->db->from('dosen_staf');
        $this->db->join('level', 'dosen_staf.id_level = level.id_level');
        return $this->db->get()->result_array();
    }

    public function getDataUser_id($id)
    {
        $this->db->select('*');
        $this->db->from('dosen_staf');
        $this->db->join('level', 'dosen_staf.id_level = level.id_level');
        $this->db->where(['username' => $id]);
        return $this->db->get()->row_array();
    }

    public function tambahDataUser()
    {
        $bag = $this->input->post('bagian', true);
        if ($bag == "Dosen") {
            $lev = "2";
        } else {
            $lev = "3";
        }

        $data = [

            "username" => $this->input->post('username', true),
            "password" => sha1($this->input->post('username', true)),
            "nama_user" => $this->input->post('nama_user', true),
            "bagian" => $bag,
            "ttl" => $this->input->post('ttl', true),
            "jk" => $this->input->post('jk', true),
            "email" => $this->input->post('email', true),
            "telp" => $this->input->post('telp', true),
            "alamat" => $this->input->post('alamat', true),
            "foto" => 'default.png',
            "id_level" => $lev,

        ];
        $this->db->insert('dosen_staf', $data);
    }

    public function editDataUser()
    {
        $bag = $this->input->post('bagian', true);
        if ($bag == "Dosen") {
            $lev = "2";
        } else {
            $lev = "3";
        }

        $data = [

            "nama_user" => $this->input->post('nama_user', true),
            "bagian" => $bag,
            "ttl" => $this->input->post('ttl', true),
            "jk" => $this->input->post('jk', true),
            "email" => $this->input->post('email', true),
            "telp" => $this->input->post('telp', true),
            "alamat" => $this->input->post('alamat', true),
            "foto" => 'default.png',
            "id_level" => $lev,
        ];

        $this->db->where('username', $this->input->post('id'));
        $this->db->update('dosen_staf', $data);
    }

    public function hapusDataUser($id)
    {
        $this->db->where('username', $id);
        $this->db->delete('dosen_staf');
    }

    // ====================================================== //
    //         FINISH----> INI UNTUK ADMIN                     //
    //========================================================//

    public function update($table, $field, $data)
    {
        $this->db->where($field);
        $this->db->update($table, $data);
    }
    public function checkpass($table, $field, $field2)
    {
        $this->db->where($field);
        $this->db->where($field2);
        return $this->db->get($table);
    }

    public function getDataUmum()
    {
        $this->db->select('*');
        $this->db->from('umum');
        $this->db->join('level', 'umum.id_level = level.id_level');
        return $this->db->get()->result_array();
    }

    public function getDataUmum_id($id)
    {
        $this->db->select('*');
        $this->db->from('umum');
        $this->db->join('level', 'umum.id_level = level.id_level');
        $this->db->where(['username' => $id]);
        return $this->db->get()->row_array();
    }


    public function getDataMahasiswa()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('level', 'mahasiswa.id_level = level.id_level');
        return $this->db->get()->result_array();
    }

    public function getDataMahasiswa_id($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('level', 'mahasiswa.id_level = level.id_level');
        $this->db->where(['username' => $id]);
        return $this->db->get()->row_array();
    }
}
