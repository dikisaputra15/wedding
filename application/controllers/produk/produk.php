<?php

class produk extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_produk');
      $this->load->model('Model_kategori');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Produk'
      ];
      $data['produk'] = $this->Model_produk->getAllproduk();
      $data['kategori'] = $this->Model_kategori->getAllkategori();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('produk/produk', $data);
      $this->load->view('templates/footer');
   }

    public function tambahproduk()
   {
      $kategori = $this->input->post('kategori');
      $nama_produk = $this->input->post('nama_produk');
      $harga = $this->input->post('harga');
      $deskripsi = $this->input->post('deskripsi');
     

         $config['allowed_types'] = 'jpg|jpeg|png|gif|JPEG';
         $config['upload_path'] = './uploads/';
         $config['remove_spaces'] = false;
         $gambar = $_FILES['gambar']['name'];

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('gambar')) {
         } else {
            echo $this->upload->display_errors();
         }
      

      $data = [
            'id_kategori' => $kategori,
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar
          ];
     $this->Model_produk->insert($data, 'tb_produk');
      redirect('produk/produk');
   }

    public function hapusproduk($id)
   {
      $this->Model_produk->delete($id);
      redirect('produk/produk');
   }

     public function editproduk($id)
   {
      $data['title'] = 'Edit';
      $data['produk'] = $this->Model_produk->getprodukById($id);
      $data['kategori'] = $this->Model_kategori->getAllkategori();
      $this->form_validation->set_rules('id_produk', 'id_produk', 'required');
      $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
      if ($this->form_validation->run() == false) {
          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar');
          $this->load->view('produk/edit_produk', $data);
          $this->load->view('templates/footer');
      } else {
         $id_produk = $this->input->post('id_produk');
         $id_kategori = $this->input->post('id_kategori');
         $nama_produk = $this->input->post('nama_produk');
         $harga = $this->input->post('harga');
         $deskripsi = $this->input->post('deskripsi');

         $gambar = $_FILES['gambar']['name'];

         if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
               $old_image = $data['barang']['gambar'];
               if ($old_image != 'barang.jpg') {
                  unlink(FCPATH . 'uploads/' . $old_image);
               }
               $new_image = $this->upload->data('file_name');
               $this->db->set('gambar', $new_image);
            } else {
               echo $this->upload->dispay_errors();
            }
         }
         $this->db->set([
            'id_kategori' => $id_kategori,
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'deskripsi' => $deskripsi
         ]);
         $this->db->where('id_produk', $id_produk);
         $this->db->update('tb_produk');
         redirect('produk/produk');
   }

 }

  public function detail($id)
   {
      $data = [
         'title' => 'Detail Produk'
      ];
      $data['detail'] = $this->Model_produk->getdetailproduk($id);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('produk/detail', $data);
      $this->load->view('templates/footer');
   }

   public function pesan($id)
   {
      $data = [
         'title' => 'Pesan'
      ];
      $data['detail'] = $this->Model_produk->getdetailproduk($id);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('pesan/pesan', $data);
      $this->load->view('templates/footer');
   }

   public function tentang()
   {
      $data = [
         'title' => 'Tentang Kami'
      ];

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('produk/tentang', $data);
      $this->load->view('templates/footer');
   }

   public function prosespesan()
   {
      $id_produk = $this->input->post('id_produk');
      $id_user = $this->input->post('id_user');
      $kategori = $this->input->post('kategori');
      $nama_pemesan = $this->input->post('nama_pemesan');
      $no_hp = $this->input->post('no_hp');
      $alamat = $this->input->post('alamat');
      $tgl_pesan = $this->input->post('tgl_pesan');
      $status = 'menunggu pembayaran';

      $data = [
            'id_produk' => $id_produk,
            'id_user' => $id_user,
            'kategori' => $kategori,
            'nama_pemesan' => $nama_pemesan,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'tgl_pesan' => $tgl_pesan,
            'status_pesanan' => $status
          ];

     $this->Model_produk->insert_pesanan($data, 'tb_pesan');
      redirect('produk/pesan');
   }

}

?>