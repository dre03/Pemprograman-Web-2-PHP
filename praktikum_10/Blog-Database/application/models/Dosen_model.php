<?php

// BUat class
    class Dosen_model extends CI_Model{
        // buat stuktur datanya
        private $table = 'dosen';
        
        public function getAll(){
            $query = $this->db->get($this->table);
            return $query->result();
        }
    }
?>