<?php

class katalog extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_katalog');
   }

   public function index()
   {
      $data = [
         'title' => 'katalog'
      ];
      $data['katalog'] = $this->Model_katalog->getAllkatalog();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('pesan/katalog', $data);
      $this->load->view('templates/footer');
   }


}

?>