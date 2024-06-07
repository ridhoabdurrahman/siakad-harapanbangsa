<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_users');
    }

    public function index()
    {
        $data['user'] = $this->Model_users->get_user($this->session->userdata['username']);
        echo "SELAMAT DATANG" . $data['user']['fullname'];
    }
}

/* End of file Dashboard.php */
