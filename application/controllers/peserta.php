<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peserta extends CI_Controller {
	public function index()
	{
		$this->load->view('peserta/index');
	}
}