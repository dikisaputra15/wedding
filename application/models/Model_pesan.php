<?php

class Model_pesan extends CI_Model
{
   public function getAllpesan()
   {
     $id = $this->session->userdata('id_user');
      $query = "SELECT tb_pesan.*, tb_produk.id_produk,tb_produk.nama_produk,tb_produk.harga,tb_produk.deskripsi,tb_produk.gambar
                  FROM tb_pesan JOIN tb_produk
                  ON tb_pesan.id_produk=tb_produk.id_produk where tb_pesan.id_user='$id' and tb_pesan.status_pesanan='menunggu pembayaran'";
      return $this->db->query($query)->result_array();
   }

   public function getdetailpesan($id)
   {
      $query = "SELECT tb_pesan.*, tb_produk.id_produk,tb_produk.nama_produk,tb_produk.harga,tb_produk.deskripsi,tb_produk.gambar
                  FROM tb_pesan JOIN tb_produk
                  ON tb_pesan.id_produk=tb_produk.id_produk where tb_pesan.id_pesan='$id'";
      return $this->db->query($query)->result_array();
   }

   public function getallhistori()
   {
         if($this->session->userdata('level')=='customer'){
              $id = $this->session->userdata('id_user');
               $query = "SELECT tb_bayar.*, tb_pesan.id_pesan,tb_pesan.kategori,tb_pesan.nama_pemesan,tb_pesan.no_hp,tb_pesan.alamat,tb_pesan.tgl_pesan,tb_pesan.status_pesanan
                           FROM tb_bayar JOIN tb_pesan
                           ON tb_bayar.id_pesan=tb_pesan.id_pesan where tb_bayar.id_user='$id'";
               return $this->db->query($query)->result_array();
         }else{
               $query = "SELECT tb_bayar.*, tb_pesan.id_pesan,tb_pesan.kategori,tb_pesan.nama_pemesan,tb_pesan.no_hp,tb_pesan.alamat,tb_pesan.tgl_pesan,tb_pesan.status_pesanan
                           FROM tb_bayar JOIN tb_pesan
                           ON tb_bayar.id_pesan=tb_pesan.id_pesan";
               return $this->db->query($query)->result_array();
         }
   }

   public function getpesanmasuk()
   {
      $query = "SELECT tb_bayar.*, tb_pesan.id_pesan,tb_pesan.kategori,tb_pesan.nama_pemesan,tb_pesan.no_hp,tb_pesan.alamat,tb_pesan.tgl_pesan,tb_pesan.status_pesanan
                  FROM tb_bayar JOIN tb_pesan
                  ON tb_bayar.id_pesan=tb_pesan.id_pesan where tb_pesan.status_pesanan='menunggu verifikasi'";
      return $this->db->query($query)->result_array();
   }

   public function getdetailpesanmasuk($id)
   {
      $query = "SELECT tb_bayar.*, tb_pesan.id_pesan,tb_pesan.kategori,tb_pesan.nama_pemesan,tb_pesan.no_hp,tb_pesan.alamat,tb_pesan.tgl_pesan,tb_pesan.status_pesanan, tb_produk.id_produk,tb_produk.nama_produk,tb_produk.deskripsi,tb_produk.gambar,tb_produk.harga
                  FROM tb_bayar JOIN tb_pesan
                  ON tb_bayar.id_pesan=tb_pesan.id_pesan JOIN tb_produk on tb_bayar.id_produk=tb_produk.id_produk where tb_bayar.id_pesan='$id'";
      return $this->db->query($query)->result_array();
   }

    public function insertbayar($data, $table)
   {
      $this->db->insert($table, $data);
   }

}

?>