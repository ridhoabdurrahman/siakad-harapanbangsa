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
                'fullname' => htmlspecialchars($this->input->post('fullname')),
                'username' => htmlspecialchars($this->input->post('username')),
                'email' => htmlspecialchars($this->input->post('email')),
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
            return redirect('auth/signin');
        }
    }
}

/* End of file Auth.php */
