<?php

class histori extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_pesan');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Pesanan'
      ];
      $data['histori'] = $this->Model_pesan->getAllhistori();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('pesan/histori_pesan', $data);
      $this->load->view('templates/footer');
   }


  public function detailhistori($id)
   {
      $data = [
         'title' => 'Detail pemesanan'
      ];
      $data['detailpesan'] = $this->Model_pesan->getdetailpesan($id);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('pesan/detailhistori', $data);
      $this->load->view('templates/footer');
   }

   public function pesanmasuk()
   {
      $data = [
         'title' => 'Pesan masuk'
      ];
      $data['pesanmasuk'] = $this->Model_pesan->getpesanmasuk();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('pesan/pesanmasuk', $data);
      $this->load->view('templates/footer');
   }

   public function detailpesanmasuk($id)
   {
       $data = [
         'title' => 'Detail Transaksi Masuk'
      ];
      $data['detailpesanmasuk'] = $this->Model_pesan->getdetailpesanmasuk($id);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('pesan/detailpesanmasuk', $data);
      $this->load->view('templates/footer');
   }

   public function prosespesan()
   {
      $id_produk = $this->input->post('id_produk');
      $kategori = $this->input->post('kategori');
      $nama_pemesan = $this->input->post('nama_pemesan');
      $no_hp = $this->input->post('no_hp');
      $alamat = $this->input->post('alamat');
      $tgl_pesan = $this->input->post('tgl_pesan');
      $status = 'menunggu pembayaran';

      $data = [
            'id_produk' => $id_produk,
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