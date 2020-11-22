<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAuth extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function tambahMemberBaru()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'email' => htmlspecialchars($this->input->post('email', true))
        ];
        $this->db->insert('data', $data);
    }
}
