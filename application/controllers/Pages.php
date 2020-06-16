<?php

class Pages extends CI_Controller 
{
    public function home() 
    {
        if(!file_exists(APPPATH.'views/pages/home.php')) {
            show_404();
        }
        $data['title'] = 'Home';
        
        $this->load->view('templates/header');
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        if(!file_exists(APPPATH.'views/pages/add.php')) {
            show_404();
        }
        $data['title'] = 'Add new task';

        $this->load->view('templates/header');
        $this->load->view('pages/add');
        $this->load->view('templates/footer');
    }

}