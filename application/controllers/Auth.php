<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        return redirect('/auth/signin');
    }

    public function signin()
    {
        $this->template->load('admin/auth_layout', 'admin/auth/login');
    }

    public function signup()
    {
        $this->template->load('admin/auth_layout', 'admin/auth/registration');
    }
}

/* End of file Auth.php */
