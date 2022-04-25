<?php

class AdminPanel extends CI_Controller {

	public function index()
	{
		$this->load->view('panel_v/panel.php');
	}

    public function users()
	{
		$this->load->view('panel_v/users.php');
	}
}