<?php

/**
 * 
 */
class SekolahdasarController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('SekolahdasarModel');
	}

	public function response($data)
	{
		$this->output 
					->set_content_type('bcit-ci-CodeIgniter-b73eb19/json')
					->set_output(json_encode($data))
					->_display();
		exit;			
	}

	public function get_SekolahDasar()
	{
		$data = $this->SekolahdasarController->get_SekolahDasar();

		return $this->response([
			"error"		=> false,
			"message"	=> "Data tersedia..",
			"SekolahDasar"	=> $data
		]);
	}
}