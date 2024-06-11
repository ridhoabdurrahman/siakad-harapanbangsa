<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Model_users');
        $this->load->model('Model_menu');
    }

    public function index()
    {
        $data = [
            'title' => 'Menu',
            'user' => $this->Model_users->get_user($this->session->userdata('username')),
        ];

        $this->template->load('admin_layout', 'admin/menu/index', $data);
    }

    public function store()
    {
        $data = [
            'name' => $this->input->post('name'),
        ];

        $this->Model_menu->insert($data);
        $this->session->set_flashdata('status', 'success');
        redirect('menu');
    }

    public function get_all_menu()
    {
        header('Content-Type: application/json');
        echo $this->Model_menu->get_menu();
    }
}

/* End of file Menu.php */
