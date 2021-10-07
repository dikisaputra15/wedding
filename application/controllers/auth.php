<?php

class auth extends CI_Controller
{
   public function index()
   {
       if (!$this->session->userdata('email')) {
         
         $data = [
            'title' => 'Login'
         ];
         $this->load->view('login_templates/header', $data);
         $this->load->view('auth/login');
         $this->load->view('login_templates/footer');
      }else{
         redirect('dashboard');
      }
   }

   public function login()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
      
       if ($user) {
         if ($user['password'] == $password) {
            $data = [
               'id_user' => $user['id_user'],
               'email' => $user['email'],
               'nama_lengkap' => $user['nama_lengkap'],
               'password' => $user['password'],
               'level' => $user['level']
            ];
            $this->session->set_userdata($data);
            redirect('dashboard');
         } else {
            redirect('auth');
         }
      } else {
         redirect('auth');
      }      
   }

   public function logout()
   {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('password');

      redirect('auth');
   }
}
