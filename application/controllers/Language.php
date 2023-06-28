<?php
class Language extends CI_Controller{
public function index(){
$this->load->model("CountryLanguage");
$data['countrylanguage'] = $this->CountryLanguage->getLanguage();
$this->load->view("language",$data);
}
}
?>