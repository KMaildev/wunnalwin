<?php

class Team_model extends CI_Model
{

    public function get_members()
    {
        return $this->db->get('team')->result();
    }
}
