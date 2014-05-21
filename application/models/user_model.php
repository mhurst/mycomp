<?php

class User_Model extends CI_Model {

	public function register_user($options = array()) {
		if($this->AddUser($options)) {
			return true;
		}

		return false;
	}

	public function login_user($options = array()) {

        $this->load->library('PasswordHash');
        if ($options['user'] && $this->passwordhash->CheckPassword($options['password'], $options['user']->password)) {
            unset($options['user']->password);
            $this->session->set_userdata('current_user', $options['user']);
            return true;
        } else {
            return false;
        }
	}

	public function get_user($options = array()) {
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

            $query = $this->db->get('users');

            //If id is passed return single row.
            if (isset($options['id']) || isset($options['email']) || isset($options['username'])) {
                return $query->row();
            } else {
                return $query->result();
            }

        }
        return false;
	}

	public function UpdateUser($options = array()) {
        if (is_array($options) && isset($options['id'])) {
            foreach ($options as $key => $value) {
                if ($key != 'id') {
                    $this->db->set($key, $value);
                }
            }

            $this->db->where('id', $options['id']);
            $this->db->update('users');

            return true;
        }
        return false;
    }

    public function AddUser($options = array()) {
        if (is_array($options) && !empty($options)) {
            $this->db->insert('users', $options);

            return $this->db->insert_id();
        }
        return false;
    }
}
	