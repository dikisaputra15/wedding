<?php

class Model_kategori extends CI_Model
{
   public function getAllkategori()
   {
      $query = "SELECT * from tb_kategori";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_kategori', ['id_kategori' => $id]);
   }

  public function getkategoriById($id_kategori)
   {
      return $this->db->get_where('tb_kategori', ['id_kategori' => $id_kategori])->row_array();
   }

	public function updatekategori()
   {
      $kategori = $this->input->post('kategori');

      $data = [
      	'kategori' => $kategori
      ];

      $this->db->update('tb_kategori', $data, ['id_kategori' => $this->input->post('id_kategori')]);
   }

}

?>