<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('twig');
	}

	public function index()
	{
		$this->data['ENVIRONMENT'] = ENVIRONMENT;
		$this->data['CI_VERSION'] = CI_VERSION;
		$this->twig->display('welcome_message', $this->data);
	}
}
