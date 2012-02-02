<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends Public_Controller
{
	/**
	 * Constructor method
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Default Method
	 * @access public
	 * @return void
	 */
	public function index()
	{
		$this->home();
	}

	/**
	 * home page banner
	 * @access public
	 * @return void
	 */
	public function home()
	{
		echo $this->load->view('banners/home');
	}
}
