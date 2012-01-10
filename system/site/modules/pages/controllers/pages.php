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
		$this->_page();
	}

	/**
	 * Page method
	 * @access public
	 * @param array $url_segments The URL segments
	 * @return void
	 */
	public function _page()
	{
		//$this->template->set_layout('default.html');

		// Create page output
		$this->template->title('Home Page');

		echo $this->template->build('pages/page', NULL, TRUE);
	}
}
