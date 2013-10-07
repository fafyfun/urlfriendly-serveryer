<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 5/12/13
 * Time: 6:37 PM
 * To change this template use File | Settings | File Templates.
 */
class Save_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function savedata($data)
    {
        $this->db->insert('answer_table', $data);
    }

    public function show_records()
    {
        $this->db->distinct();
        $query = $this->db->get('answer_table');
        $result = $query->result();

               return($result);
    }

}
