<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_users extends CI_Model
{
    public function check_username($username)
    {
        return $this->db->get_where('users', ['username' => $username])->row_array();
    }

    public function check_email($email)
    {
        return $this->db->get_where('users', ['email' => $email])->row_array();
    }

    public function store($data)
    {
        $this->db->insert('users', $data);
    }
}

/* End of file Model_users.php */
