<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends MX_Controller {

	public function index()
	{
		echo "<h1>This is the tasks controller</h1>";

		$this->load->model('mdl_tasks');
		$data['query'] = $this->mdl_tasks->get('priority');
			//call template two_col from templates module
		$data['module'] = "tasks";
		$data['view_file'] = "display";
		echo Modules::run('templates/two_col', $data);
		
		//$this->load->view('display', $data);
	}




}
