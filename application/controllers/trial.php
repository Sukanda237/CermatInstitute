<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trial extends CI_Controller {
	public function index()
	{
		$this->load->view('v_trial');
	}
}