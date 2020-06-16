<?php

class Task_model extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_tasks() 
    {
        $this->db->order_by('date', 'ASC');
        $query = $this->db->get('tasks');
        
        return $query->result_array();
    }

    public function done_task($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tasks');

        return true;
    }

    public function add_task()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'date' => $this->input->post('date')
        );

        return $this->db->insert('tasks', $data);
    }
}