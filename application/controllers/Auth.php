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



    public function reg()
    {

        // =========================ALAMAT=
        $this->load->model('produk_model');
        $id_alamat = $this->produk_model->CreateCodeAlamat();
        // =========================ALAMAT=

        if ($this->session->userdata('email')) {
            redirect('user');
        }
        // rulesnya 
        // ga boleh kosong
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('wa', 'Wa', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'this email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match !',
            'min_length' => 'Password too short !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');




        if ($this->form_validation->run() == false) {
            $data['title'] = 'Donatur Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/reg');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'wa' => htmlspecialchars($this->input->post('wa', true)),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];
            //alamat
            $dataalamat = [
                'id_alamat' => $id_alamat,
                'email' => htmlspecialchars($email),
                'alamat' => $this->input->post('alamat'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
                'kode_pos' => $this->input->post('kode_pos'),
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];



            $this->db->insert('user', $data);
            $this->db->insert('data_alamat', $dataalamat);
            $this->db->insert('user_token', $user_token);

            //kirim email Aktivasi


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Selamat! Silahkan <b>cek Email</b> untuk <b>Aktifasi</b> </div>');
            redirect('auth');
        }
    }


    // ================================================





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
        $this->load->view('auth/blocked');
    }
}