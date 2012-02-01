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
		
		//get listing categories
		$this->load->config('listings/listing-cats');
		$data = array(
			'cat_items'    =>  $this->config->item('ypmcats')
		);

		echo $this->template->build('pages/home', $data, TRUE, FALSE);
	}
}
