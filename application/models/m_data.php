<?php

class M_data extends CI_Model{

    function tampil_data(){
        return $this->db->get('post');
    }

    function poster_populer(){
        return $this->db->get('poster');
    }
    
}