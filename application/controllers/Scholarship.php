<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarship extends Front_Controller
{
	public function index()
	{
		$data = $this->data;
		$data['page_name'] = 'Scholarships';
		$this->load->view('scholarship/home', $data);
	}
}