<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('kitap_v.php');
	}

	public function kitaplar()
	{
		$this->load->view('books_v.php');
	}

	public function iletisim()
	{
		$this->load->view('contact_v.php');
	}

	public function login()
	{
		$this->load->view('login_v.php');
	}

	public function kayit()
	{
		$this->load->view('kayitol_v.php');
	}

	public function forgot()
	{
		$this->load->view('forgotpass_v.php');
	}

	public function profile()
	{
		$this->load->view('profile_v.php');
	}
}

