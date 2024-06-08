<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_users');
    }

    public function index()
    {
        return redirect('/auth/signin');
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


    public function signin()
    {
        $this->form_validation->set_rules('email_username', 'Username or Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Sign In'
            ];
            $this->template->load('auth_layout', 'auth/login', $data);
        } else {
            $this->_signin();
        }
    }

    private function _signin()
    {
        $email_username = $this->input->post('email_username');
        $password = $this->input->post('password');

        $user = $this->Model_users->check_account($email_username);

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'username' => $user['username'],
                        'fullname' => $user['fullname'],
                        'role_id' => $user['role_id'],
                    ];

                    $this->session->set_userdata($data);

                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('email_username', $email_username);
                    $this->session->set_flashdata('wrong_password', 'Wrong Password. Try again!');
                    redirect('auth/signin');
                }
            } else {
                $this->session->set_flashdata('email_username', $email_username);
                $this->session->set_flashdata('not_active', 'This account hasn\'t been activated!');
                redirect('auth/signin');
            }
        } else {
            $this->session->set_flashdata('email_username', $email_username);
            $this->session->set_flashdata('not_found', 'We can\'t find account with this Username or Email!');
            redirect('auth/signin');
        }
    }

    public function signup()
    {
        $this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');


        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Sign Up'
            ];
            $this->template->load('auth_layout', 'auth/registration', $data);
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

    public function signout()
    {
        $session = ['email', 'username', 'fullname', 'role_id'];
        $this->session->unset_userdata($session);
        $this->session->set_flashdata('logged_out', '<div class="alert alert-success alert-dismissible d-flex" role="alert"><span class="badge badge-center rounded-pill bg-success border-label-success p-3 me-2"><i class="fa-solid fa-check fs-6"></i></span><div class="d-flex flex-column ps-1"><h6 class="alert-heading d-flex align-items-center mb-1">Logged Out</h6><span>You have been logged out. Thanks 😉</span></div></div>');
        redirect('auth/signin');
    }
}

/* End of file Auth.php */
