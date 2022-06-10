<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{

    ///////////POST
    public function index()
    {
        // .........
        // $data['title'] = 'Tambah Post';
        $data['data_post'] = $this->db->get_where('post')->result_array();
        $data['user'] = $this->db->get_where(
            'account',
            ['username' => $this->session->userdata('username')]
        )
            ->row_array();

        $data['data_post'] = $this->db->get_where('post')->result_array();
        $data['data_account'] = $this->db->get_where('account')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');

        if ($this->form_validation->run() == false) {
            // $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/login_topbar', $data);
            $this->load->view('templates/login_sidebar', $data);
            $this->load->view('admin/post', $data);
            $this->load->view('templates/login_footer', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'date' => date('Y-m-d H:i:s'),
                // 'username' => $this->input->post('username'),
            ];
            $this->db->insert('post', $data);
            $this->session->set_flashdata('message', '<div class="alert 
          alert-success" role="alert"> New Account added </div>');
            redirect('post');
        }
    }
}