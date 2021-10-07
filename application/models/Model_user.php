<?php

class Model_user extends CI_Model
{
   public function getAlluser()
   {
      $query = "SELECT * from tb_user";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function insert_register($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_user', ['id_user' => $id]);
   }

  public function getuserById($id_user)
   {
      return $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
   }

	public function updateuser()
   {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $email = $this->input->post('email');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $level = $this->input->post('level');

      $data = [
      	'email' => $email,
      	'nama_lengkap' => $nama_lengkap,
      	'username' => $username,
      	'password' => $password,
      	'level' => $level
      ];

      $this->db->update('tb_user', $data, ['id_user' => $this->input->post('id_user')]);
   }

    public function getprofile($id)
   {
      return $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
   }

}

?>