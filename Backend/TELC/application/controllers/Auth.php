<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAuth');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Login Page";
            $this->load->view('login');
        } else {
            $this->_login();
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Wrong Username/Password</div>');
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('data', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                redirect('backend');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Wrong Username/Password</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">You are not registered</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[data.username]', [
            'is_unique' => 'Username Sudah Terpakai'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->ModelAuth->tambahMemberBaru();
            $this->session->set_flashdata('pesan', '<div role="alert">Selamat, Akun Anda Telah Terdaftar, Silahkan Login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('pesan', '<div role="alert">You have been logged out</div>');
        redirect('auth');
    }
}
