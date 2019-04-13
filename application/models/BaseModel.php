<?php

    class BaseModel extends CI_Model
    {
        protected $table = '';

        public function __construct() 
        {

            parent::__construct();
        }

        public function get_all()
        {
            return $this->db->get($this->table)
                            ->result();
        }

        public function get_by_id($id)
        {
            return $this->db->get_where($this->table, array('id' => $id))
                            ->row();
        }

        public function insert($data)
        {
            return $this->db->insert($this->table, $data);
        }

    }
?>