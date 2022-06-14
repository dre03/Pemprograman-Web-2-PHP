<?php

// BUat class
    class Matkul_model extends CI_Model{
        // buat stuktur datanya
        private $table = 'matkul';

        public function getAll(){
            $query = $this->db->get($this->table);
            return $query->result();
        }
        
    }

?>