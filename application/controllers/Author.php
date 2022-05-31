<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Author extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        // if ($this->session->userdata('username')) {
        //     redirect('user');
        // }
        $this->form_validation->set_rules('username', 'username', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', ' Login Dulu');
            $data['title'] = 'Beranda';
            $data['user'] = $this->db->get_where('account', ['username' => $this->session->userdata('username')])->row_array();
            $data['data_post'] = $this->db->get_where('post')->result_array();
            $data['data_account'] = $this->db->get_where('account')->result_array();
            // .......
            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/login_topbar', $data);
            $this->load->view('author/index', $data);
            $this->load->view('templates/auth_footer', $data);
        } else {
            //Validasinya Sukses
            // $this->_login();
        }
    }
}