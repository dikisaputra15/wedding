<?php

class kategori extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_kategori');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Kategori'
      ];
      $data['kategori'] = $this->Model_kategori->getAllkategori();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('kategori/kategori', $data);
      $this->load->view('templates/footer');
   }

    public function tambahkategori()
   {
      $kategori = $this->input->post('kategori');
      $data = [
            'kategori' => $kategori
          ];
     $this->Model_kategori->insert($data, 'tb_kategori');
      redirect('kategori/kategori');
   }

    public function hapuskategori($id)
   {
      $this->Model_kategori->delete($id);
      redirect('kategori/kategori');
   }

     public function editkategori($id_kategori)
   {
      $data['title'] = 'Edit';
      $data['kategori'] = $this->Model_kategori->getkategoriById($id_kategori);
      $this->form_validation->set_rules('id_kategori', 'id_user', 'required');
      $this->form_validation->set_rules('kategori', 'kategori', 'required');
      if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/edit_kategori', $data);
        $this->load->view('templates/footer');
      } else {
         $this->Model_kategori->updatekategori();
         redirect('kategori/kategori');
      }
   }

 }