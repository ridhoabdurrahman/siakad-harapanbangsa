<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_users');
    }

    public function check_username()
    {
        $username = $this->input->post('username');
        $v_username = $this->Model_users->check_username($username);

        if ($v_username) {
            $response['valid'] = false;
        } else {
            $response['valid'] = true;
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function check_email()
    {
        $email = $this->input->post('email');
        $v_email = $this->Model_users->check_email($email);

        if ($v_email) {
            $response['valid'] = false;
        } else {
            $response['valid'] = true;
        }

        header("Content-Type: application/json");
        echo json_encode($response);
    }

    public function index()
    {
        return redirect('/auth/signin');
    }

    public function signin()
    {
        $data = [
            'title' => 'Sign In'
        ];
        $this->template->load('admin/auth_layout', 'admin/auth/login', $data);
    }

    public function signup()
    {
        $this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');


        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Sign Up'
            ];
            $this->template->load('admin/auth_layout', 'admin/auth/registration', $data);
        } else {
            $data = [
                'id' => $this->uuid->v4(),
                'fullname' => htmlspecialchars($this->input->post('fullname', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default_profile_picture.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'is_deleted' => 0
            ];
            $data['created_by'] = $data['id'];
            $data['created_at'] = time();
            $data['updated_by'] = $data['id'];
            $data['updated_at'] = time();

            $this->Model_users->store($data);
            $this->session->set_flashdata('register_success', '<div class="alert alert-success alert-dismissible d-flex" role="alert"><span class="badge badge-center rounded-pill bg-success border-label-success p-3 me-2"><i class="fa-solid fa-check fs-6"></i></span><div class="d-flex flex-column ps-1"><h6 class="alert-heading d-flex align-items-center mb-1">Congratulations</h6><span>Your account has been created. Please login 😉</span></div></div>');
            redirect('auth/signin');
        }
    }
}

/* End of file Auth.php */
