<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'admin.php';

class Game extends Admin {
	public function __construct() {
		parent::__construct();

		$this->load->model('game_model', 'games');

	}

	public function index() {
		$this->get_all();
	}

	public function add_form() {
		$data['current_page'] = 'games';
		$this->template->load('admin/application', 'admin/add_game', $data);
	}

	public function create() {
		if($this->games->add_game(array('name' => $_POST['name']))) {
			$this->session->set_flashdata('message', $_POST['name'] . ' added to games!');
			redirect(base_url() . 'admin/game');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong, please try again');
		}
	}

	public function edit_form() {
		$data['current_page'] = 'games';
		$this->template->load('admin/application', 'admin/add_game', $data);
	}

	public function update() {
		if($this->games->Update_game(array('name' => $_POST['name'], 'id' => $_POST['id']))) {
			$this->session->set_flashdata('message', $_POST['name'] . ' updated!');
			redirect(base_url() . 'admin/game');
		} else {

			$this->session->set_flashdata('error', 'Something went wrong, please try again');
		}
	}

	public function get_all() {
		$data['games'] = $this->games->get_game();
		$data['current_page'] = 'games';

		$this->template->load('admin/application', 'admin/games', $data);
	}
}