<?php defined('BASEPATH') OR exit('No direct script access allowed');

class VideoAds extends Public_Controller
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

	public function _remap()
	{
		redirect(base_url());
	}

	/**
	 * Default Method
	 * @access public
	 * @return void
	 */
	public function index()
	{
		echo $this->load->view('videoads/gallery');
	}

}
