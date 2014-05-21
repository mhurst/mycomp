<?php

class Ladderin_Model extends CI_Model {
	public function get_ladin($options = array()) {
		if (is_array($options)) {
            //Qualifications - refactor
            foreach ($options as $key => $value) {
                if ($key != 'limit' && $key != 'offset' && $key != 'sortby' && $key != 'sortdirection') {
                    $this->db->where($key, $value);
                }
            }
            // limits / offsets
            if (isset($options['limit']) && isset($options['offset'])) {
                $this->db->limit($options['limit'], $options['offset']);
            } else if (isset($options['limit'])) {
                $this->db->limit($options['limit']);
            }
            //sort
            if (isset($options['sortby']) && isset($options['sortdirection'])) {
                $this->db->order_by($options['sortby'], $options['sortdirection']);
            }

            $query = $this->db->get('ladder_in');

            //If id is passed return single row.
            if (isset($options['id'])) {
                return $query->row();
            } else {
                return $query->result();
            }

        }
        return false;
	}

	public function Update_ladin($options = array()) {
        if (is_array($options) && isset($options['id'])) {
            foreach ($options as $key => $value) {
                if ($key != 'id') {
                    $this->db->set($key, $value);
                }
            }

            $this->db->where('id', $options['id']);
            $this->db->update('ladder_in');

            return true;
        }
        return false;
    }

    public function add_ladin($options = array()) {
        if (is_array($options) && !empty($options)) {
            $this->db->insert('ladder_in', $options);

            return $this->db->insert_id();
        }
        return false;
    }
}