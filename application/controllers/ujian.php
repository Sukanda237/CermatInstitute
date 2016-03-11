<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ujian extends CI_Controller {
	public function index()
	{
		$this->load->view('peserta/Ujian');
	}
}