<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesehatan_model extends CI_Model
{
    private $table = 'riwayat_kesehatan';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'nama_lengkap',  //samakan dengan atribute name pada tags input
                'label' => 'nama_lengkap',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'nama_orang_tua',
                'label' => 'nama_orang_tua',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'ttl',
                'label' => 'ttl',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'umur',
                'label' => 'umur',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'golongan_darah',
                'label' => 'golongan_darah',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            [
                'field' => 'riwayat_penyakit',
                'label' => 'riwayat_penyakit',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data kesehatan berdasarkan id kesehatan
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_kesehatan" => $id])->row();
        
    }

    //menampilkan semua data kesehatan
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_kesehatan", "desc");
        $query = $this->db->get();
        return $query->result();
        
    }

    //menyimpan data kesehatan
    public function save()
    {
        $data = array(
            "nama_lengkap" => $this->input->post('nama_lengkap'),
            "nama_orang_tua" => $this->input->post('nama_orang_tua'),
            "ttl" => $this->input->post('ttl'),
            "umur" => $this->input->post('umur'),
            "golongan_darah" => $this->input->post('golongan_darah'),
            "riwayat_penyakit" => $this->input->post('riwayat_penyakit')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data kesehatan
    public function update()
    {
         $data = array(
            "nama_lengkap" => $this->input->post('nama_lengkap'),
            "nama_orang_tua" => $this->input->post('nama_orang_tua'),
            "ttl" => $this->input->post('ttl'),
            "umur" => $this->input->post('umur'),
            "golongan_darah" => $this->input->post('golongan_darah'),
            "riwayat_penyakit" => $this->input->post('riwayat_penyakit')
        );
        return $this->db->update($this->table, $data, array('id_kesehatan' => $this->input->post('id_kesehatan')));
    }

    //hapus data kesehatan
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_kesehatan" => $id));
    }
}