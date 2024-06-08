<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Model
{
    public function get_menu()
    {
        $roleId = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu_name` FROM `user_menu` JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id` WHERE `user_access_menu`.`role_id` = $roleId ORDER BY `user_access_menu`.`menu_id` ASC";

        $menu = $this->db->query($queryMenu)->result_array();

        return $menu;
    }
}

/* End of file Menu.php */
