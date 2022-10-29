<?php defined('BASEPATH') or exit('No direct script access allowed');

class Usdcad extends MY_Controller
{
    public function __construct()
    {
        // To inherit directly the attributes of the parent class.
        parent::__construct();
        $this->load->model('M_usdcad');
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
        $data = $this->M_usdcad->get_rate();
        return $data;
    }

    public function update($usd, $eur)
    {
        $data = $this->M_usdcad->update_rate($usd, $eur);
        return $data;
    }
    
}