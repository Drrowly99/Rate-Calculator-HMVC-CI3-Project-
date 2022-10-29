<?php

class M_usdeur extends CI_Model {

    function get_rate()
	{   
        $query = $this->db->get('usdeur');
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
        if($this->db->update('user')){
            return true;
        }
        return false;
       
	}

}
