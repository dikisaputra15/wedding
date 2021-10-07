<?php

class Model_produk extends CI_Model
{
   public function getAllproduk()
   {
      $query = "SELECT tb_produk.*, tb_kategori.id_kategori,tb_kategori.kategori
                  FROM tb_produk JOIN tb_kategori
                  ON tb_produk.id_kategori=tb_kategori.id_kategori";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_produk', ['id_produk' => $id]);
   }

  public function getprodukById($id)
   {
      return $this->db->get_where('tb_produk', ['id_produk' => $id])->row_array();
   }

   public function getdetailproduk($id)
   {
      $query = "SELECT tb_produk.*, tb_kategori.id_kategori,tb_kategori.kategori
                  FROM tb_produk JOIN tb_kategori
                  ON tb_produk.id_kategori=tb_kategori.id_kategori where id_produk='$id'";
      return $this->db->query($query)->result_array();
   }

	public function updatekategori()
   {
      $kategori = $this->input->post('kategori');

      $data = [
      	'kategori' => $kategori
      ];

      $this->db->update('tb_kategori', $data, ['id_kategori' => $this->input->post('id_kategori')]);
   }

    public function insert_pesanan($data, $table)
   {
      $this->db->insert($table, $data);
   }

}

?>