<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nilai extends CI_Controller {
	public function index()
	{
		$this->load->view('peserta/nilai');
	}
}