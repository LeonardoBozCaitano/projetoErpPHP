<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_controller {

	public function index()
	{
            $this->pagina = "home";
            $this->load->view('layout');
	}
}
