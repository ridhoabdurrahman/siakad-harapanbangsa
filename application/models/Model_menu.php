<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_menu extends CI_Model
{
    public function get_menu()
    {
        return $this->datatables->table('menu')->draw();
    }

    public function get_row($id)
    {
        return $this->db->get_where('menu', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('menu', $data);
    }

    public function destroy($id)
    {
        $this->db->delete('menu', ['id' => $id]);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('menu', $data);
    }
}

/* End of file Model_menu.php */
