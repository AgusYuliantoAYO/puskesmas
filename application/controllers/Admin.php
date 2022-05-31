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
        //load Model
        //    $this->load->model('news_model','data_news');

        //load library
        //    $this->load->library('pagination');


        //    // Search / Ambil data Keyword
        //        if($this->input->post('submit'))
        //        {
        //            $data['keyword'] = $this->input->post('keyword');

        //            $this->session->set_userdata('keyword', $data['keyword']);
        //        } else {
        //            $data['keyword'] = $this->session->userdata('keyword');
        //        }
        // ================ ======================

        //    //   pagination
        //    $this->db->like('judul_news', $data['keyword']);
        //    $this->db->or_like('deskripsi_news', $data['keyword']);
        //    $this->db->from('data_news');
        //    $config['base_url'] = 'http://localhost/donasi-login/Admin/dataNews';
        //    $config['num_links'] = 5;
        //    $config['total_rows'] = $this->db->count_all_results();
        //    $data['total_rows'] = $config['total_rows'];
        //    $config['per_page'] = 3;

        //    //initialize
        //    $this->pagination->initialize($config);



        //    $data['start'] = $this->uri->segment(3);
        //    $data['data_news'] = $this->data_news->getNews($config['per_page'], $data['start'], $data['keyword']);

        // Kode Unik ID
        // $this->load->model('news_model');
        // $kd_news = $this->news_model->CreateCode();

        // .........
        $data['title'] = 'Tambah Account';
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
}