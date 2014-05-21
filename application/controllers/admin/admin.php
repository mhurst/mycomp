<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index() {
		$this->dashboard();
	}

	public function dashboard() {
		$data['current_page'] = 'home';
		$this->template->load('admin/application', 'admin/dashboard', $data);
	}
}
