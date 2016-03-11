<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trial extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function index()
	{
		$this->load->view('admin/v_trial');
	}
    function datatables_ajax()
    {
    	/** AJAX Handle */
    	if(
    		isset($_SERVER['HTTP_X_REQUESTED_WITH']) && 
    		!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
    		strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
    		)
    	{
            
            $this->load->model('m_trial');
    		
    		/**
    		 * Mengambil Parameter dan Perubahan nilai dari setiap 
    		 * aktifitas pada table
    		 */
            $datatables  = $_POST;
            $datatables['table']    = 'peserta';
    		$datatables['id-table'] = 'id_peserta';
            /**
             * Kolom yang ditampilkan
             */
	    	$datatables['col-display'] = array(
            	    		               'id_peserta',
            	    		               'nama_peserta',
            	    		               'jenis_kelamin',
            	    		               'no_hp',
            	    		               'username'
            	    		             );
            /**
             * menggunakan table join
             */
            $datatables['join']    = 'INNER JOIN position ON position = id_position';
	    	$this->m_trial->Datatables($datatables);
    	}
    	return;
    }
}