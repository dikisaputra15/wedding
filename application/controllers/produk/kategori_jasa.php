<?php

class kategori_jasa extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_kategorijasa');
   }

   public function list($id)
   {
      $data = [
         'title' => 'Jasa atau layanan'
      ];
      $data['jasa'] = $this->Model_kategorijasa->getkategorijasa($id);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('produk/kategori_jasa', $data);
      $this->load->view('templates/footer');
   }


 }