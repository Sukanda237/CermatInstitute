<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mulaiujian extends CI_Controller {
	public function index()
	{
		$this->load->view('peserta/mulai-ujian');
	}
}