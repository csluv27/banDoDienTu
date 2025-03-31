<?php
defined('BASEPATH') or exit('No direct script access allowed');

class orderController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('orderModel');
		$this->load->library('pagination');
	}
  public function checkLogin()
	{
		if (!$this->session->userdata('LoggedIn')) {
			redirect(base_url('/login'));
		}
	}
	
	public function list($page = 1) {
    if ($page <= 0) {
        $page = 1;
    }
    $this->checkLogin();
    $this->load->view('adminTemplate/header');
    $this->load->view('adminTemplate/navbar');

    // Configuring pagination
    $config = array();
    $config["base_url"] = base_url() . 'danh-sach-order/';
    $config["total_rows"] = $this->orderModel->countAllOrders();
    $config["per_page"] = 10;
    $config["uri_segment"] = 2;
    $config['use_page_numbers'] = TRUE;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'Đầu';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = 'Cuối';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a>';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';

    $this->pagination->initialize($config);

    $offset = ($page - 1) * $config["per_page"];
    $data["links"] = $this->pagination->create_links();
    $data['allOrderAdmin_pagination'] = $this->orderModel->getAllOrderPaginated($config["per_page"], $offset);

    $this->load->view('order/list', $data);
    $this->load->view('adminTemplate/footer');
}




	public function view($order_code)
	{
    $this->checkLogin();

		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');

    $this->load->model('orderModel');
    $data['order_details'] = $this->orderModel->selectOrderDetails($order_code);

		$this->load->view('order/view', $data);
		$this->load->view('adminTemplate/footer');

	}
	public function delete_order($order_code)
	{
    $this->checkLogin();
    $this->load->model('orderModel');
		$del_order_details = $this -> orderModel->deleteOrderDetails($order_code);
    $del = $this->orderModel->deleteOrder($order_code);
		if($del){
			
			redirect(base_url('order/list'));
		}else{
			redirect(base_url('order/list'));
		}
	}
	public function process() {
    $value = $this->input->post('value');
    $order_code = $this->input->post('order_code');
		$this->load->model('orderModel');
		$data = array(
			'status'=>$value
		);
    $this->orderModel->updateOrder($data,$order_code);
	}
  public function userView($order_code) {
    $this->checkLogin();

    $this->load->view('pages/template/header');


    $data['order_details'] = $this->orderModel->selectOrderDetails($order_code);

    $this->load->view('pages/orderUserView', $data);
    $this->load->view('pages/template/footer');
}

public function userOrderList() {
  $this->checkLogin();
  
  // Lấy thông tin email của người dùng đăng nhập
  $user_email = $this->session->userdata('LoggedInCustomer')['email'];

  // Lấy danh sách đơn hàng của người dùng
  $this->load->model('orderModel');
  $data['order_list'] = $this->orderModel->getUserOrders($user_email);

  // Lấy danh sách thương hiệu
  $this->load->model('brandModel');  // Đảm bảo model thương hiệu được nạp
  $data['brand'] = $this->brandModel->getAllBrands(); // Lấy danh sách thương hiệu

  // Tải view
  $this->load->view('pages/template/header', $data);
  $this->load->view('pages/orderUserList', $data);
  $this->load->view('pages/template/footer', $data);
}


	


}
