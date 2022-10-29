<?php defined('BASEPATH') or exit('No direct script access allowed');

class Usdeur extends MY_Controller
{
    public function __construct()
    {
        // To inherit directly the attributes of the parent class.
        parent::__construct();
        $this->load->model('M_usdeur');
        $this->load->database();
        $this->load->helper('text');
        $this->load->helper(array('form'));
        $this->load->library('session');
        $this->load->library('user_agent');
        $this->load->helper('url');
        $this->load->helper('security');
    }

    public function get_rate()
    {

        $data = $this->M_usdeur->get_rate();
        return $data;
    }

    public function update($usd, $eur)
    {
        $data = $this->M_usdeur->update_rate($usd, $eur);
        return $data;
    }
    
}