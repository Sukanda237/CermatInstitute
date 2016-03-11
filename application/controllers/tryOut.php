<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TryOut extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/v_tryOut');
	}
}