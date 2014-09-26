<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		render_page($this,'home');
	}

	public function test() {
		render_page($this, 'testing');
	}

	// Dhaval needs to modify this method
	public function csv() {
		echo "this page needs to implement by dhaval. " . anchor("welcome", "Back");
	}

	// Bhavik needs to modify this method
	public function api() {
		echo "this service needs to implement by bhavik. " . anchor("welcome", "Back");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */