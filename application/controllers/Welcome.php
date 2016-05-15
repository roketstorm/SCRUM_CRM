<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('main_view');
	}

	public function project($pid)
	{
		if ($pid == NULL) {
			$this->load->view('main_view', $data);
		}
		else {
			$this->load->model('Projects');
			$data['project'] = $this->Projects->get_project($pid);

			$this->load->view('user_view', $data);
		}
	}

	public function new_project() 
	{
		$this->load->view('new_project_view');
	}

	public function project_list() 
	{
		$this->load->model('Projects');
		$data['project'] = $this->Projects->all_project();
		$this->load->view('project_list_view', $data);
	}

}
