<?php

class Model_katalog extends CI_Model
{

  public function getAllkatalog()
   {
       $query = "SELECT tb_produk.*, tb_kategori.id_kategori,tb_kategori.kategori
                  FROM tb_produk JOIN tb_kategori
                  ON tb_produk.id_kategori=tb_kategori.id_kategori";
      return $this->db->query($query)->result_array();
   }

}

?>