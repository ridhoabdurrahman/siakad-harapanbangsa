<?php
function check_is_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('is_logged_in');
    if ($user_session) {
        redirect('dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('is_logged_in');
    if (!$user_session) {
        redirect('auth/signin');
    }
}
