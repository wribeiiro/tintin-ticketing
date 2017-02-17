<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categories_model');
    }

    public function create()
    {
        $this->roles_model->check_permission('category', 2);
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $form = $_POST;
            $this->categories_model->add_category($form);
            echo site_url('category/all');
            redirect(site_url('category/all'));
        }
        $this->load->view('category/create');
    }

    public function edit($cid)
    {
        $this->roles_model->check_permission('category', 2);
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $form = $_POST;
            $this->categories_model->set_category($form);
            redirect(site_url('category/all'));
        }
        $category = $this->categories_model->get_category($cid);
        $this->load->view('category/edit', compact('category'));
    }

    public function remove($cid)
    {
        $this->roles_model->check_permission('category', 2);
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $this->categories_model->delete_category($cid);
        }
        redirect(site_url('category/all'));
    }

    public function all()
    {
        $categories = $this->categories_model->get_categories();
        $this->load->view('category/all', compact('categories'));
    }

}
