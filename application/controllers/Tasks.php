<?php

class Tasks extends CI_Controller 
{
    public function load_tasks() 
    {
        $data['title'] = 'Tasks list';
        $data['tasks'] = $this->Task_model->get_tasks();

        $this->load->view('templates/header');
        $this->load->view('pages/list', $data);
        $this->load->view('templates/footer');
    }

    public function done_task($id) 
    {
        $this->Task_model->done_task($id);
        redirect('list');
    }

    public function insert_task() 
    {
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('date','Date','required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('pages/add');
            $this->load->view('templates/footer');
        } else 
        {
            $this->Task_model->add_task();
            $this->load->view('templates/header');
            redirect('list');
        }
    }
}