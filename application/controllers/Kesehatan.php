<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesehatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Kesehatan_model"); 
    }

   
    public function index()
    {

        $data["title"] = "Data Kesehatan";
        
        $data["data_kesehatan"] = $this->Kesehatan_model->getAll();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
       
        $this->load->view('kesehatan/index', $data);
        $this->load->view('templates/footer');
    }

   
    public function add()
    {
        $Kesehatan = $this->Kesehatan_model; 
        $validation = $this->form_validation; 
        $validation->set_rules($Kesehatan->rules()); 
        
        if ($validation->run()) {
            $Kesehatan->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kesehatan berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("kesehatan");
        }
        $data["title"] = "Tambah Data Kesehatan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('kesehatan/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('kesehatan');

        $Kesehatan = $this->Kesehatan_model;
        $validation = $this->form_validation;
        $validation->set_rules($Kesehatan->rules());

        if ($validation->run()) {
            $Kesehatan->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kesehatan berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("kesehatan");
        }
        $data["title"] = "Edit Data Kesehatan";
        $data["data_kesehatan"] = $Kesehatan->getById($id);
        if (!$data["data_kesehatan"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('kesehatan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->Kesehatan_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Kesehatan berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }
}