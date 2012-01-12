<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends Public_Controller
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
		echo $this->load->view('ads/adsbox');
	}

}
