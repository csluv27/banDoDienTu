<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboardController extends CI_Controller
{
	public function checkLogin()
	{

		if (!$this->session->userdata('LoggedIn')) {
			redirect(base_url('/login'));
		}
	}

	public function index()
	{
		$this->checkLogin();
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');
		$this->load->view('dashboard/index');
		$this->load->view('adminTemplate/footer');

	}
	public function viewDashboard()
	{
		$this->checkLogin();
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');
		$this->load->model('OrderModel');
		$data['top_selling_products'] = $this->OrderModel->getTopSellingProducts();
		$data['total_revenue'] = $this->OrderModel->getTotalRevenue();
		$this->load->view('dashboard/index', $data);
		$this->load->view('adminTemplate/footer');
	}
	public function logout()
	{
		$this->session->unset_userdata('LoggedIn');
		$this->session->set_flashdata('message', 'Đăng xuất thành công!');
		redirect(base_url('login'));

	}



}
