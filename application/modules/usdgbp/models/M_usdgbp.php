<?php

class M_usdgbp extends CI_Model {

    function get_rate()
	{   
        $query = $this->db->get('usdgbp');
        return $query->row();
	}

    function update_rate($usd, $eur)
	{   
        $def = '1/';
        $rate_vs = "{$eur}{$def}";
        $this->db->where('id', '1');
        $this->db->set('usd', $usd);
        $this->db->set('eur', $eur);
        $this->db->set('rate_vs', $rate_vs);
        if($this->db->update('usdgbp')){
            return true;
        }
        return false;
       
	}

}
