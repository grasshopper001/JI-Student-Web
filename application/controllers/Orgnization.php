<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Orgnization extends Front_Controller
{
	protected function redirect()
	{
		$this->__redirect('orgnization');
	}
	
	public function index()
	{
		$this->load->view('common/header');
	}
}
