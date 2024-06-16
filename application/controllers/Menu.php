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
            'name' => htmlspecialchars($this->input->post('name', true)),
        ];

        $this->Model_menu->insert($data);
        $this->session->set_flashdata('status', 'success');
        $this->session->set_flashdata('action', 'create');
        $this->session->set_flashdata('message', 'Data has been Saved Successfully!');
        redirect('menu');
    }

    public function delete($id)
    {
        $this->Model_menu->destroy($id);
        if ($this->db->affected_rows()) {
            $this->session->set_flashdata('status', 'success');
            $this->session->set_flashdata('action', 'delete');
            $this->session->set_flashdata('message', 'Data has been Deleted Successfully!');
        } else {
            $this->session->set_flashdata('status', 'failed');
            $this->session->set_flashdata('action', 'delete');
            $this->session->set_flashdata('message', 'Something went wrong');
        }

        redirect('menu');
    }

    public function edit($id)
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
        ];
        $this->Model_menu->update($data, $id);
        if ($this->db->affected_rows()) {
            $this->session->set_flashdata('status', 'success');
            $this->session->set_flashdata('action', 'update');
            $this->session->set_flashdata('message', 'Data has been Updated successfully!');
        } else {
            $this->session->set_flashdata('status', 'failed');
            $this->session->set_flashdata('action', 'update');
            $this->session->set_flashdata('message', 'Something went wrong');
        }

        redirect('menu');
    }

    public function get_all_menu()
    {
        header('Content-Type: application/json');
        echo $this->Model_menu->get_menu();
    }

    public function get_menu($id)
    {
        $data = [
            "code" => 200,
            "status" => "success",
            "data" => $this->Model_menu->get_row($id),
        ];
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}

/* End of file Menu.php */
