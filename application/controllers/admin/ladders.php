<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'admin.php';

class Ladders extends Admin {
    public function __construct() {
        parent::__construct();
        $this->load->model('ladder_model', 'ladders');
    }

    public function index() {
        $this->get_all();
    }

    public function get_all() {
        $data['current_page'] = 'ladders';
        $data['ladders'] = $this->ladders->get_ladder();

        $this->template->load('admin/application', 'admin/ladders/ladders', $data);
    }

    public function add_form() {
        $data['current_page'] = 'ladders';

        //grab all games
        $this->load->model('game_model', 'games');

        $data['games'] = $this->games->get_game();
        $this->template->load('admin/application', 'admin/ladders/add_ladder', $data);
    }
}
