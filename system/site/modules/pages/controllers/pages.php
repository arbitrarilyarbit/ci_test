<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Public_Controller
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
		$this->_home();
	}

	/**
	 * home page method
	 * @access public
	 * @param array $url_segments The URL segments
	 * @return void
	 */
	public function _home()
	{
		//helper to load partials
		$this->load->helper('admin_theme');
		
		// Create page output
		$this->template->title('Home');

		echo $this->template->build('pages/home', NULL, TRUE, FALSE);
	}
}
