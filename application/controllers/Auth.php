<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->model('model_post');

        if ($this->session->userdata('username')) {
            redirect('auth');
        }
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', ' Login Dulu');
            $data['title'] = 'Beranda';
            $data['user'] = $this->db->get_where('account', ['username' => $this->session->userdata('username')])->row_array();
            $data['data_post'] = $this->db->get_where('post')->result_array();
            $data['news'] = $this->model_post->tampilNews();

            // .......
            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/auth_topbar', $data);
            $this->load->view('beranda/index', $data);
            $this->load->view('templates/auth_footer', $data);
        } else {
            //Validasinya Sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('account', ['username' => $username])->row_array();

        //User ada
        if ($user) {
            //user ada
            //aktif
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 1) {
                    redirect('admin');
                } else {

                    redirect('author');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
						Wrong password! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Belum Terdaftar ! </div>');
            redirect('auth');
        }
    }




    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			You have been logged out ! </div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('errorrs/blocked');
    }
}