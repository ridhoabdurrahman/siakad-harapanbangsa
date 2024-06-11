<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Model_users');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'user' => $this->Model_users->get_user($this->session->userdata('username')),
        ];

        $this->template->load('admin_layout', 'admin/dashboard/index', $data);
    }
}

/* End of file Dashboard.php */
