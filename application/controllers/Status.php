<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('statuses_model');
        $this->load->library('form_validation');
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $this->form_validation->set_rules('label', 'Status name', 'required');
            $this->form_validation->set_rules('description', 'Status description', 'required');
            $this->form_validation->set_rules('place', 'Status place', 'required|numeric');

            if($this->form_validation->run() != FALSE)
            {
                $form = $_POST;
                $this->statuses_model->add_status($form);
                echo site_url('status/all');
                redirect(site_url('status/all'));
            }
            else
            {
                $this->session->set_flashdata('error', 'There are errors in the ticket.');
            }
        }

        $count = count($this->statuses_model->get_statuses());

        $title = 'New Status';
        $this->load->view('status/create', compact('count', 'title'));
    }

    public function edit($cid)
    {
        $this->roles_model->check_permission('status', 2);
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $this->form_validation->set_rules('label', 'Status name', 'required');
            $this->form_validation->set_rules('description', 'Status description', 'required');
            $this->form_validation->set_rules('place', 'Status place', 'required|numeric');

            if($this->form_validation->run() != FALSE)
            {
                $form = $_POST;
                $this->statuses_model->set_status($form);
                redirect(site_url('status/all'));
            }
            else
            {
                $this->session->set_flashdata('error', 'There are errors in the ticket.');
            }
        }
        $status = $this->statuses_model->get_status($cid);
        $count = count($this->statuses_model->get_statuses());

        $title = 'Edit Status';
        $this->load->view('status/edit', compact('status', 'count', 'title'));
    }

    public function remove($cid)
    {
        $this->roles_model->check_permission('status', 2);
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $this->statuses_model->remove_status($cid);
        }
        redirect(site_url('status/all'));
    }

    public function all()
    {
        $statuses = $this->statuses_model->get_statuses();

        $title = 'Statuses';
        $this->load->view('status/all', compact('statuses', 'title'));
    }

}
