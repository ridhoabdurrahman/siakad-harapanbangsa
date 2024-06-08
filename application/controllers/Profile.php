<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_users');
    }

    public function index()
    {
        $data = [
            'title' => 'Profile',
            'user' => $this->Model_users->get_user($this->session->userdata('username')),
        ];

        $this->template->load('admin_layout', 'admin/profile/index', $data);
    }
}

/* End of file Profile.php */
