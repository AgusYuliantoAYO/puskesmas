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
            redirect('author');
        }
    }

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
            $this->load->view('author/index', $data);
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
            redirect('author');
        }
    }

    public function hapusPost($idpost)
    {
        $this->load->model('model_post');
        $where = array('idpost' => $idpost);
        $this->model_post->hapus_data($where, 'post');
        $this->session->set_flashdata('flash', 'diHapus');
        redirect('author');
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
        $this->load->view('author/edit/post', $data);
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

        redirect('author');
    }
}