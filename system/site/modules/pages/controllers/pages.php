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
		
		//get search box
		$data['searchbox'] = Modules::run('listings/searchlistings/searchbox');
		
		echo $this->template->build('pages/home', $data, TRUE, FALSE);
	}

	/**
	 * search results method
	 * @access public
	 * @return void
	 */
	public function listing() {
		//helper to load partials
		$this->load->helper('admin_theme');
		
		// Create page output
		$this->template->title('Business Listing');
		
		//get search box
		$data['searchbox'] = Modules::run('listings/searchlistings/searchbox');

		//TODO: get from DB -> listing results
		$data['listingResults'] = array(
			'1' => array('title' => 'Up To Date Accounting', 'desc' => 'I am a CPA with over 30 years of experience, serving clients in various business segments, such as Self-Employed Individuals, Medical Profession, Retail & Wholesale, Food Service, and Contractors.'),
			'2' => array('title' => 'Javaheri & Associates', 'desc' => 'Javaheri & Associates is a full-service Certified Public Accounting firm. Sohail has been in the public accounting field since 2000. Sohail specializes in a variety of solutions including tax planning, tax preparation, IRS representation, compilations, business consulting, financial planning, and accounting consulting.'),
			'3' => array('title' => 'ZS PROFIT SOLUTION', 'desc' => 'Our firm is devoted to providing you with quality legal services, primarily in Estate Planning and Probate services. Since a vital part of your estate planning is the ownership and management of your entire estate, our office will also assist you in the transactional areas of Business, Corporate and Real Estate law. Since the services we provide require an initial consultation to discuss all of your available options we never charge for the initial consultation and provide a flat fee for our services prior to commencing any services.'),
			'4' => array('title' => 'Elazar Aryeh, PC', 'desc' => 'Elazar Aryeh, PC, a Law Firm located in Forest Hills, Queens, prides itself on providing the highest quality legal representation at a fair and reasonable cost to our clients. We recognize that excellent legal representation is essential for a successful business and for the favorable resolution of legal disputes. We also recognize that each matter is unique and as such we approach each matter in a creative and dynamic manner.'),
			'5' => array('title' => 'Bankruptcy Legal Center', 'desc' => 'Bankruptcy Legal Center is a bankruptcy law firm located in San Diego, California and founded by Mr. Aalam. Our sole mission is to help people in our local community get out of debt. To help empower you with knowledge, our website contains an in depth Knowledge Center, 100% written by Mr. Aalam, which is a virtual encyclopedia of bankruptcy law and information.'),
			'6' => array('title' => 'Law Offices of Sally Amirghahari, J.D., LL.M.', 'desc' => 'Areas of Practice: Estate Planning, Probate, Trust Administration, Taxation, Corporate, Business Law and Immigration Law.'),
			'7' => array('title' => 'Law Offices of Afshin A. Asher', 'desc' => 'The Law Offices of Afshin A. Asher, Inc. is a "boutique" law firm located in Century City, Los Angeles. By narrowing its scope of practice to a limited number of specialized areas, the firm is able to provide clients with the highest quality representation in related areas such as business and corporate law, estate planning, trust administration and probate, asset protection planning and taxation. The Law Offices of Afshin A. Asher, Inc. does not provide litigation services.'),
			'8' => array('title' => 'Zarrin Azadi, Ph.D.', 'desc' => 'Providing multi-disciplinary Environment, in the most Sincere, open, honest, and approachable setting, for you and your family with the utmost respect to cultural influence.'),
			'9' => array('title' => 'Mana Ekbatani, MS, MFTI', 'desc' => 'As an experienced Marriage and Family Therapist, I provide individual, family and couples counseling to those struggling with a wide array of difficulties to find greater purpose, a sense of direction, and increased joy in their lives. I help individuals in developing their intellectual, emotional and social potential, while alleviating the stress and conflicts that may interfere with their inner development.'),
			'10' => array('title' => 'Beverly Hills Center for Well-being, Inc.', 'desc' => 'Marriage and Family Therapist practice working with clients with issues of cultural diversity, anxiety and depression couples therapy, and life transition issues.'),
		);

		echo $this->template->build('pages/listing', $data, TRUE, FALSE);
	}

}
