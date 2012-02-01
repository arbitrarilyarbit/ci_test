<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Ypmmenu extends Public_Controller {

	/**
	 * Constructor method
	 * @access public
	 * @return void
	 */
	function __construct() {
		parent::__construct();
	}

	function generate() {
		$menu_items = $this->config->item('ypmmenu');
		return $menu_items;
	}

	function display() {
		$this->load->config('ypmmenu/ypmmenu');

		$data = array(
			'menu_items'    =>  $this->generate()
		);

		$this->load->view('menu', $data);
	}
}

?>