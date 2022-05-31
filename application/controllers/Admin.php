<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

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
            $this->load->view('admin/index', $data);
            $this->load->view('templates/auth_footer', $data);
        } else {
            //Validasinya Sukses
            // $this->_login();
        }
    }

    // ===Tambah Akun 
    public function dataAccount()
    {
        // .........
        $data['title'] = 'Tambah Account';
        $data['data_account'] = $this->db->get_where('account')->result_array();
        $data['user'] = $this->db->get_where(
            'account',
            ['username' => $this->session->userdata('username')]
        )
            ->row_array();
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('name', 'Namae', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/login_topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/auth_footer', $data);
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'name' => $this->input->post('name'),
                'role' => $this->input->post('role'),
                // 'tgl_post' => date('Y-m-d H:i:s'),
            ];
            $this->db->insert('account', $data);
            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> New Account added </div>');
            redirect('admin');
        }
    }


    // ============ //akun ==============

    // ===Tambah Akun 
    public function account()
    {

        $this->form_validation->set_rules('username', 'username', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', ' Login Dulu');
            $data['title'] = 'account';
            $data['user'] = $this->db->get_where('account', ['username' => $this->session->userdata('username')])->row_array();

            $data['data_account'] = $this->db->get_where('account')->result_array();
            // .......
            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/login_topbar', $data);
            $this->load->view('admin/account', $data);
            $this->load->view('templates/auth_footer', $data);
        } else {
            redirect('admin');
        }
    }


    public function hapusAccount($username)
    {
        $this->load->model('model_account');
        $where = array('username' => $username);
        $this->model_account->hapus_data($where, 'account');
        $this->session->set_flashdata('flash', 'diHapus');
        redirect('admin/account');
    }

    public function editAccount($username)
    {
        $data['title'] = 'Edit Account';
        $data['user'] = $this->db->get_where(
            'account',
            ['username' => $this->session->userdata('username')]
        )
            ->row_array();
        $this->load->model('model_account');

        $data['account'] = $this->model_account->edit_account($username);

        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/login_topbar', $data);
        $this->load->view('admin/edit/account', $data);
        $this->load->view('templates/auth_footer', $data);
    }

    public function updateAccount()
    {
        $this->load->model('model_account');
        $username = $this->input->post('username');

        $data = [
            'name' => $this->input->post('name'),
            'role' => $this->input->post('role'),
        ];
        $where = [
            'username' => $username
        ];

        $this->model_account->update_data($where, $data, 'account');

        redirect('admin/account');
    }


    // ============================= akun 
    public function dataPost()
    {
        // .........
        $data['title'] = 'Tambah Post';
        $data['data_post'] = $this->db->get_where('post')->result_array();
        $data['user'] = $this->db->get_where(
            'account',
            ['username' => $this->session->userdata('username')]
        )
            ->row_array();
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/login_topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/auth_footer', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'date' => date('Y-m-d H:i:s'),
                'username' => $this->input->post('username'),
            ];
            $this->db->insert('post', $data);
            $this->session->set_flashdata('message', '<div class="alert 
          alert-success" role="alert"> New Account added </div>');
            redirect('admin');
        }
    }

    public function hapusPost($idpost)
    {
        $this->load->model('model_post');
        $where = array('idpost' => $idpost);
        $this->model_post->hapus_data($where, 'post');
        $this->session->set_flashdata('flash', 'diHapus');
        redirect('admin');
    }

    public function editPost($idpost)
    {
        $data['title'] = 'Edit Post';
        $data['user'] = $this->db->get_where(
            'account',
            ['username' => $this->session->userdata('username')]
        )
            ->row_array();
        $this->load->model('model_post');

        $data['post'] = $this->model_post->edit_post($idpost);

        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/login_topbar', $data);
        $this->load->view('admin/edit/post', $data);
        $this->load->view('templates/auth_footer', $data);
    }

    public function updatePost()
    {
        $this->load->model('model_post');
        $idpost = $this->input->post('idpost');

        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),

        ];
        $where = [
            'idpost' => $idpost
        ];

        $this->model_post->update_data($where, $data, 'post');

        redirect('admin');
    }
}