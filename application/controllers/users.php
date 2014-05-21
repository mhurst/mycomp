<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	//tell the view what aprtial to laod
	//$data['view_type']

	public function __construct() {
		parent::__construct();

		$this->load->model('user_model', 'Users');
	}

	public function my_account() {
		$this->template->load('application', 'users/my_account', $data);
	}

	public function register() {
		$data['view_type'] = '_register';
		$this->load->library('PasswordHash');

		if($this->input->post('submit')) {
			$this->Users->register_user(
				array(
					'username' => $_POST['username'],
					'email'    => $_POST['email'],
					'password' => $this->passwordhash->HashPassword($_POST['password'])
				)
			);

			redirect();
		} else {
			$this->template->load('application', 'users/my_account', $data);
		}
	}

	public function login_form() {
		$data['view_type'] = '_login';
       	$this->template->load('application', 'users/my_account', $data);
	}

	public function login() {
		$options = array(
			'username'    => $this->input->post('username'),
	        'password'    => $this->input->post('password'),
	        'user'        => $this->Users->get_user(array('username' => $this->input->post('username')))
        );

        $this->load->library('PasswordHash');
        if ($this->Users->login_user($options)) {
            $this->session->set_flashdata('message', 'Thank you for logging in!');
        } else {
        	$this->session->set_flashdata('error', 'Either your username or password is incorrect. Please try again.');
        	redirect(base_url() . 'users/login_form');
        }
			redirect(base_url());
	}

	public function logout() {
		$this->session->unset_userdata('current_user');

		redirect(base_url());
	}
}

