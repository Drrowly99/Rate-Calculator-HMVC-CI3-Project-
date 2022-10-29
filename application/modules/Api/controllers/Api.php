<?php defined('BASEPATH') or exit('No direct script access allowed');

class Api extends MY_Controller
{
    public function __construct()
    {
        // To inherit directly the attributes of the parent class.
        parent::__construct();
        $this->load->model('M_Api');
        $this->load->database();
        $this->load->helper('text');
        $this->load->helper(array('form'));
        $this->load->library('session');
        $this->load->library('user_agent');
        $this->load->helper('url');
        $this->load->helper('security');
    }


    public function loadRate()
    {

        $data['eur'] = $this->usdeur->get_rate()->eur;
        $data['cad'] = $this->usdcad->get_rate()->cad;
        $data['gbp'] = $this->usdgbp->get_rate()->gbp;
        $data['inr'] = $this->usdinr->get_rate()->inr;

        echo json_encode($data);
     
    }

    

    public function eur_getRate()
    {
        echo $this->usdeur->get_rate()->eur;   
    }

    public function eur_update($usd, $eur)
    {
        $data = $this->M_usdeur->update($usd, $eur);
        return $data;
    }


    // CAD RATE CALLS

    public function cad_getRate()
    {
        echo $this->usdcad->get_rate()->cad;
    }

    public function cad_update($usd, $cad)
    {
        $data = $this->M_usdeur->update($usd, $cad);
        return $data;
    }

    // GBP RATE CALLS

    public function gbp_getRate()
    {
        echo $this->usdgbp->get_rate()->gbp;
    }

    public function gbp_update($usd, $gbp)
    {
        $data = $this->M_usdeur->update($usd, $gbp);
        return $data;
    }

    // INR RATE CALLS

    public function inr_getRate()
    {
        echo $this->usdinr->get_rate()->inr;
    }

    public function inr_update($usd, $inr)
    {
        $data = $this->M_usdeur->update($usd, $inr);
        return $data;
    }
    
}