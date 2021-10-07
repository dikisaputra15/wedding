<?php

class user extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_user');
   }

   public function index()
   {
      $data = [
         'title' => 'Data User'
      ];
      $data['user'] = $this->Model_user->getAlluser();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('user/user', $data);
      $this->load->view('templates/footer');
   }

    public function tambahuser()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $nama_lengkap = $this->input->post('nama_lengkap');
      $level = $this->input->post('level');
      $data = [
            'email' => $email,
            'nama_lengkap' => $nama_lengkap,
            'password' => $password,
            'level' => $level
          ];
     $this->Model_user->insert($data, 'tb_user');
      redirect('user/user');
   }

    public function hapususer($id)
   {
      $this->Model_user->delete($id);
      redirect('user/user');
   }

     public function edituser($id_user)
   {
      $data['title'] = 'Edit';
      $data['user'] = $this->Model_user->getuserById($id_user);
      $this->form_validation->set_rules('id_user', 'id_user', 'required');
      $this->form_validation->set_rules('email', 'email', 'required');
      if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('user/edit_user', $data);
        $this->load->view('templates/footer');
      } else {
         $this->Model_user->updateuser();
         redirect('user/user');
      }
   }

    public function register()
   {
      $data = [
         'title' => 'Register'
      ];
        $this->load->view('login_templates/header', $data);
        $this->load->view('user/register', $data);
        $this->load->view('login_templates/footer');
   }

    public function proses_register()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $nama_lengkap = $this->input->post('nama_lengkap');
      $level = 'customer';
      $data = [
            'email' => $email,
            'nama_lengkap' => $nama_lengkap,
            'password' => $password,
            'level' => $level
          ];
     $this->Model_user->insert_register($data, 'tb_user');
      redirect('auth');
   }

    public function forget()
   {
      $data = [
         'title' => 'forget'
      ];
        $this->load->view('login_templates/header', $data);
        $this->load->view('user/forget', $data);
        $this->load->view('login_templates/footer');
   }

    public function forget_pass()
   {

      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $query = $this->db->get_where('tb_user', array('email' => $email));

       foreach ($query->result() as $row)
        {
            $dbemail = $row->email;
        }

      if($dbemail == $email){
        $data = [
              'password' => $password
            ];
        $this->db->update('tb_user', $data, ['email' => $email]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Reset Password Berhasil!
        </div>');
        redirect('auth');
      }else{
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Email Yang Anda Massukkan Tidak Sesuai!
        </div>');
        redirect('user/user/forget');
      }
   }

    public function profile($id)
   {
        $data = [
           'title' => 'Profile'
        ];
        $data['profile'] = $this->Model_user->getprofile($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
   }

    public function update_profile()
   {
      $id_user = $this->input->post('id_user');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $nama_lengkap = $this->input->post('nama_lengkap');
      $data = [
            'email' => $email,
            'nama_lengkap' => $nama_lengkap,
            'password' => $password
          ];
      $this->db->update('tb_user', $data, ['id_user' => $id_user]);
      redirect('user/user/profile/'.$id_user);
   }

 }