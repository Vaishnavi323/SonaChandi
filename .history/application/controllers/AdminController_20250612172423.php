<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function index()
	{
		$this->load->view('Admin/welcome_message');
	}

	public function product()
	{
		$this->load->view('Admin/product');
	}
	public function profile()
	{
		$this->load->view('Admin/profile');
	}
	public function addproduct()
	{
		$this->load->view('Admin/Add-product');
	}

	public function login()
	{
		$this->load->view('Admin/Admin/login');
	}
	public function dashboard()
	{
		$this->load->view('Admin/dashboard');
	}
	public function orders()
	{
		$this->load->view('Admin/orders');
	}

	public function OrderDetails()
	{
		$this->load->view('Admin/orderDetails');
	}

	public function custPlanDetails()
	{
		$this->load->view('Admin/custPlanDetails');
	}


	public function CustGoldCoin()
	{
		$this->load->view('Admin/custgoldcoin');
	}
	public function cust()
	{
		$this->load->view('Admin/customer');
	}

	public function rating()
	{
		$this->load->view('Admin/rating2');
	}
}
