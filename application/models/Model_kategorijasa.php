<?php

class Model_kategorijasa extends CI_Model
{

  public function getkategorijasa($id)
   {
      $query = "SELECT * from tb_produk where id_kategori='$id'";
      return $this->db->query($query)->row_array();
   }

}

?>