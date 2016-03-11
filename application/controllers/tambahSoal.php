<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TambahSoal extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/v_tambahSoal');
	}
}
