<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_menu extends CI_Model
{
    public function get_menu()
    {
        return $this->datatables->table('menu')->draw();
    }

    public function insert($data)
    {
        $this->db->insert('menu', $data);
    }
}

/* End of file Model_menu.php */
