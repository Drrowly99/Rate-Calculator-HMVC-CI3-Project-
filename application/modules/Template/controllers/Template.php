<?php defined('BASEPATH') or exit('No direct script access allowed');

class Template extends MY_Controller
{
    public function __construct()
    {
        // To inherit directly the attributes of the parent class.
        parent::__construct();
       

    }

    public function index($data = null)
    {
        $this->load->view('template/template_admin', $data);
    }


}

