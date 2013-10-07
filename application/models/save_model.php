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


//        $sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";
//
//        $this->db->query($sql, array(3, 'live', 'Rick'));

        //$this->db->update('entries', $this, array('id' => $_POST['id']));

//        $query = $this->db->get('entries', 10);
//        return $query->result();

//        $query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);

/*        $this->db->select_max('age');
        $query = $this->db->get('members');
// Produces: SELECT MAX(age) as age FROM members

        $this->db->select_max('age', 'member_age');
        $query = $this->db->get('members');
// Produces: SELECT MAX(age) as member_age FROM members*/

/*        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->join('comments', 'comments.id = blogs.id');

        $query = $this->db->get();

// Produces:
// SELECT * FROM blogs
// JOIN comments ON comments.id = blogs.id*/


/*        $this->db->where('name', $name);
        $this->db->where('title', $title);
        $this->db->where('status', $status);

// WHERE name = 'Joe' AND title = 'boss' AND status = 'active'*/


    }

}
