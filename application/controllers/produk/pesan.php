<?php

class pesan extends CI_Controller
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
      $data['pesan'] = $this->Model_pesan->getAllpesan();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('pesan/list_pesan', $data);
      $this->load->view('templates/footer');
   }


  public function detailpesan($id)
   {
      $data = [
         'title' => 'Detail pemesanan'
      ];
      $data['detailpesan'] = $this->Model_pesan->getdetailpesan($id);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('pesan/detailpesan', $data);
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

   public function formbayar()
   {
      $id_pesan = $this->input->post('id_pesan');
      $id_user = $this->input->post('id_user');
      $id_produk = $this->input->post('id_produk');
      $status = 'menunggu verifikasi';
     

 
         $config['allowed_types'] = 'jpg|jpeg|png|gif|JPEG';
         $config['upload_path'] = './uploads/buktibayar/';
         $config['remove_spaces'] = false;
         $gambar = $_FILES['gambar']['name'];

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('gambar')) {
         } else {
            echo $this->upload->display_errors();
         }

      $data = [
            'id_pesan' => $id_pesan,
            'id_produk' => $id_produk,
            'id_user' => $id_user,
            'gambarbukti' => $gambar
          ];

      $this->db->set('status_pesanan', $status);
      $this->db->where('id_pesan', $id_pesan);
      $this->db->update('tb_pesan');
      $this->Model_pesan->insertbayar($data, 'tb_bayar');
      redirect('produk/histori');
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

    public function terima()
   {
      $id = $this->uri->segment(4);  
      $this->db->set('status_pesanan', 'pesanan diterima');
      $this->db->where('id_pesan', $id);
      $this->db->update('tb_pesan');
      redirect('produk/histori/pesanmasuk');
   }

    public function tolak()
   {
      $id = $this->uri->segment(4);  
      $this->db->set('status_pesanan', 'pesanan ditolak');
      $this->db->where('id_pesan', $id);
      $this->db->update('tb_pesan');
      redirect('produk/histori/pesanmasuk');
   }

}

?>