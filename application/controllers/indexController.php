<?php
defined('BASEPATH') or exit('No direct script access allowed');

class indexController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('IndexModel');
		$this->load->model('productModel');
		$this->data['category'] = $this->IndexModel->getCategoryHome();
		$this->data['slider'] = $this->IndexModel->getSliderHome();
		$this->data['brand'] = $this->IndexModel->getBrandHome();
		$this->load->library('cart');
		$this->load->library('pagination');
		$this->load->library('email');

	}

    // Phương thức hiển thị sản phẩm top bán chạy nhất
    public function showTopSellingProducts() {
        $data['top_selling_products'] = $this->productModel->get_top_products(5);

        // Đã loại bỏ phần debug
        return $data;
    }

    // Phương thức index hiển thị tất cả sản phẩm
    public function index() {
        $data = $this->showTopSellingProducts();

        // Custom config cho phân trang
        $config = array();
        $config["base_url"] = base_url() . '/phan-trang/index';
        $config['total_rows'] = $this->IndexModel->countAllProduct();
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
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

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
        $offset = ($page - 1) * $config["per_page"];
        $this->data["links"] = $this->pagination->create_links();

        $this->data['allproduct_pagination'] = $this->IndexModel->getIndexPagination($config["per_page"], $offset);

        // Thêm dữ liệu top bán chạy nhất vào $this->data
        $this->data['top_selling_products'] = $data['top_selling_products'];

        $this->load->view('pages/template/header', $this->data);
        // $this->load->view('pages/template/slider', $this->data);
        // Hiển thị view home với $this->data
        $this->load->view('pages/home', $this->data);
        $this->load->view('pages/template/footer');
    }



	public function category($id)
	{
		//custom config link
		$config = array();
		$config["base_url"] = base_url() . '/danh-muc' . '/' . $id . '/';
		$config['total_rows'] = $this->IndexModel->countAllProductByCategory($id); //đếm tất cả sản phẩm //8 //hàm ceil làm tròn phân trang 
		$config["per_page"] = 12; //từng trang 3 sản phẩn
		$config["uri_segment"] = 3; //lấy số trang hiện tại
		$config['use_page_numbers'] = TRUE; //trang có số
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
		//end custom config link
		$this->pagination->initialize($config); //tự động tạo trang
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1; // Trang hiện tại
		$offset = ($page - 1) * $config["per_page"]; // Tính toán offset
		$this->data["links"] = $this->pagination->create_links(); //tự động tạo links phân trang dựa vào trang hiện tại
		$this->data['allproductByCate_pagination'] = $this->IndexModel->getCatePagination($id, $config["per_page"], $offset);
		//pagination


		// $this->data['category_product'] = $this->IndexModel->getCategoryProduct($id);
		$this->data['title'] = $this->IndexModel->getCategoryTitle($id);
		$this->load->view('pages/template/header', $this->data);

		// $this->load->view('pages/template/slider');
		$this->load->view('pages/category', $this->data);
		$this->load->view('pages/template/footer');

	}
	public function brand($id)
	{
		//custom config link
		$config = array();
		$config["base_url"] = base_url() . '/thuong-hieu' . '/' . $id . '/';
		$config['total_rows'] = $this->IndexModel->countAllProductByBrand($id); //đếm tất cả sản phẩm //8 //hàm ceil làm tròn phân trang 
		$config["per_page"] = 12; //từng trang 3 sản phẩn
		$config["uri_segment"] = 3; //lấy số trang hiện tại
		$config['use_page_numbers'] = TRUE; //trang có số
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
		//end custom config link
		$this->pagination->initialize($config); //tự động tạo trang
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1; // Trang hiện tại
		$offset = ($page - 1) * $config["per_page"]; // Tính toán offset
		$this->data["links"] = $this->pagination->create_links(); //tự động tạo links phân trang dựa vào trang hiện tại
		$this->data['allproductByBrand_pagination'] = $this->IndexModel->getBrandPagination($id, $config["per_page"], $offset);
		//pagination

		// $this->data['brand_product'] = $this->IndexModel->getBrandProduct($id);
		$this->data['title'] = $this->IndexModel->getBrandTitle($id);
		$this->load->view('pages/template/header', $this->data);
		// $this->load->view('pages/template/slider');
		$this->load->view('pages/brand', $this->data);
		$this->load->view('pages/template/footer');

	}
	public function cart()
	{
		$this->load->view('pages/template/header', $this->data);
		// $this->load->view('pages/template/slider');

		$this->load->view('pages/cart');
		$this->load->view('pages/template/footer');

	}
	public function thanks()
	{
		$this->load->view('pages/template/header', $this->data);
		// $this->load->view('pages/template/slider');
		$this->load->view('pages/thanks');
		$this->load->view('pages/template/footer');
	}
	public function contact()
	{
		$this->load->view('pages/template/header', $this->data);
		// $this->load->view('pages/template/slider');
		$this->load->view('pages/contact');
		$this->load->view('pages/template/footer');

	}
	public function send_contact()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'note' => $this->input->post('note'),

		);
		$this->IndexModel->insertContact($data);
		$this->session->set_flashdata('success', 'Gửi nhận xét thành công.');
		redirect(base_url('contact'));


	}
	public function add_to_cart()
	{
		$product_id = $this->input->post('product_id');
		$quantity = $this->input->post('quantity');
		$this->data['product_details'] = $this->IndexModel->getProductDetails($product_id);

		if ($this->cart->contents()) {
			foreach ($this->cart->contents() as $items) {
				if ($items['id'] == $product_id) {
					$this->session->set_flashdata('error_message', 'Sản phẩm đã có trong giỏ hàng.');
					redirect(base_url() . 'gio-hang');
				}
			}
		}

		foreach ($this->data['product_details'] as $pro) {
			if ($pro->quantity <= 0) {
				$this->session->set_flashdata('error_message', 'Sản phẩm đã hết hàng.');
				redirect($_SERVER['HTTP_REFERER']);
			}

			if ($pro->quantity >= $quantity) {
				$cart_qty = $quantity;
			} else {
				$cart_qty = $pro->quantity;
				$this->session->set_flashdata('error_message', 'Số lượng đặt vượt quá số lượng có sẵn trong kho.');
			}

			$cart = array(
				'id' => $pro->id,
				'qty' => $cart_qty,
				'price' => $pro->price,
				'name' => $pro->title,
				'options' => array('image' => $pro->image, 'in_stock' => $pro->quantity)
			);
			$this->cart->insert($cart);

			// Trừ số lượng trong cơ sở dữ liệu
			$new_quantity = $pro->quantity - $cart_qty;
			$this->IndexModel->updateProductQuantity($product_id, $new_quantity);
		}

		redirect(base_url() . 'gio-hang');
	}



	public function delete_all_cart()
	{
		$this->cart->destroy();
		redirect(base_url() . 'gio-hang', 'refresh');
	}
	public function delete_item($rowid)
{
    foreach ($this->cart->contents() as $items) {
        if ($items['rowid'] == $rowid) {
            $quantity_to_return = $items['qty']; // Số lượng sản phẩm trong giỏ
            $product_id = $items['id'];         // ID sản phẩm
            $this->cart->remove($rowid);        // Xóa sản phẩm khỏi giỏ hàng

            // Cập nhật số lượng sản phẩm trong kho
            $product_details = $this->IndexModel->getProductDetails($product_id);
            foreach ($product_details as $pro) {
                $new_quantity = $pro->quantity + $quantity_to_return; // Cộng lại số lượng đã xóa vào kho
                $this->IndexModel->updateProductQuantity($product_id, $new_quantity);
            }
            break; // Thoát vòng lặp sau khi tìm thấy sản phẩm cần xóa
        }
    }
    redirect(base_url() . 'gio-hang', 'refresh'); // Chuyển hướng về trang giỏ hàng
}

	

	
	private function calculate_total_cart_quantity($product_id)
	{
			$total_quantity = 0;
			foreach ($this->cart->contents() as $items) {
					if ($items['id'] == $product_id) {
							$total_quantity += $items['qty'];
					}
			}
			return $total_quantity;
	}
	

	
	public function update_cart_item()
	{
			$rowid = $this->input->post('rowid');
			$new_quantity = $this->input->post('quantity');
	
			foreach ($this->cart->contents() as $items) {
					if ($rowid == $items['rowid']) {
							$old_quantity = $items['qty']; // Số lượng cũ trong giỏ
							$product_id = $items['id'];   // ID sản phẩm
							$current_stock = $items['options']['in_stock']; // Số lượng còn lại trong kho
	
							// Kiểm tra số lượng cập nhật có hợp lệ không
							if ($new_quantity <= $current_stock + $old_quantity) {
									// Cập nhật số lượng trong giỏ hàng
									$update_data = array('rowid' => $rowid, 'qty' => $new_quantity);
									$this->cart->update($update_data);
	
									// Tính toán lại số lượng trong kho
									$quantity_difference = $new_quantity - $old_quantity; // Chênh lệch số lượng
									$new_stock = $current_stock - $quantity_difference;  // Cập nhật kho
									$this->IndexModel->updateProductQuantity($product_id, $new_stock);
							} else {
									$this->session->set_flashdata('error_message', 'Số lượng cập nhật vượt quá số lượng có sẵn.');
							}
					}
			}
			redirect(base_url() . 'gio-hang');
	}
	


	public function login()
	{
		$this->load->view('pages/template/header', $this->data);
		// $this->load->view('pages/template/slider');
		$this->load->view('pages/login');
		$this->load->view('pages/template/footer', $this->data);

	}
	public function product($id)
	{
		// Fetch product details and reviews
		$this->data['product_details'] = $this->IndexModel->getProductDetails($id);
		$this->data['list_review'] = $this->IndexModel->getListComment($id);

		// Determine category ID for related products
		foreach ($this->data['product_details'] as $key => $val) {
			$category_id = $val->category_id;
		}

		// Fetch related products
		$this->data['product_related'] = $this->IndexModel->getProductRelated($id, $category_id);

		// Load views
		$this->load->view('pages/template/header', $this->data);
		$this->load->view('pages/product_details', $this->data);
		$this->load->view('pages/template/footer');
	}

	public function checkout()
	{
		if ($this->session->userdata('LoggedInCustomer') && $this->cart->contents()) {
			$this->load->view('pages/template/header', $this->data);
			// $this->load->view('pages/template/slider');
			$this->load->view('pages/checkout', $this->data);
			$this->load->view('pages/template/footer');
		} else {
			$this->session->set_flashdata('error_message', 'Vui lòng đăng nhập để đặt hàng!');
			redirect(base_url() . 'gio-hang');
		}
	}
	public function tim_kiem()
	{
		if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
			$keyword = $_GET['keyword'];
		}
		//custom config link
		$config = array();
		$config["base_url"] = base_url() . '/tim-kiem';
		$config["reuse_query_string"] = TRUE;
		$config['total_rows'] = $this->IndexModel->countAllProductByKeyword($keyword); //đếm tất cả sản phẩm //8 //hàm ceil làm tròn phân trang 
		$config["per_page"] = 6; //từng trang 3 sản phẩn
		$config["uri_segment"] = 2; //lấy số trang hiện tại
		$config['use_page_numbers'] = TRUE; //trang có số
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
		//end custom config link
		$this->pagination->initialize($config); //tự động tạo trang
		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1; // Trang hiện tại
		$offset = ($page - 1) * $config["per_page"]; // Tính toán offset
		$this->data["links"] = $this->pagination->create_links(); //tự động tạo links phân trang dựa vào trang hiện tại
		$this->data['allproductByKeyword_pagination'] = $this->IndexModel->getKeywordSearchPagination($keyword, $config["per_page"], $offset);
		//pagination
		// $this->data['product'] = $this->IndexModel->getProductByKeyword($keyword);
		$this->data['title'] = $keyword;
		$this->load->view('pages/template/header', $this->data);
		// $this->load->view('pages/template/slider');
		$this->load->view('pages/timKiem', $this->data);
		$this->load->view('pages/template/footer');
	}



	public function login_customer()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Vui lòng nhập %s.']);

		if ($this->form_validation->run()) {
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$this->load->model('loginModel');
			$result = $this->loginModel->checkLoginCustomer($email, $password);

			if (count($result) > 0) {
				$session_array = [
					'id' => $result[0]->id,
					'name' => $result[0]->name,
					'email' => $result[0]->email,
				];
				$this->session->set_userdata('LoggedInCustomer', $session_array);
				redirect(base_url('/'));
			} else {
				$this->session->set_flashdata('error', 'Đăng nhập không thành công');
				redirect(base_url('/dang-nhap'));
			}
		} else {
			$this->login(); // Load lại view đăng nhập nếu form validation thất bại
		}
	}
	public function dang_ky()
	{
		$this->form_validation->set_rules('name', 'Họ tên', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('location', 'Địa chỉ', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('phone', 'Số điện thoại', 'trim|required', ['required' => 'Vui lòng nhập %s.']);

		if ($this->form_validation->run()) {
			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$location = $this->input->post('location');
			$password = md5($this->input->post('password'));
			$token = rand(0000, 9999);
			$data = array(
				'name' => $name,
				'email' => $email,
				'password' => $password,
				'location' => $location,
				'phone' => $phone,
				'token' => $token,
			);
			$this->load->model('LoginModel');
			$result = $this->LoginModel->newCustomer($data);
			if ($result) {
				$fullurl = base_url() . 'xac-thuc-dang-ky/?token=' . $token . '&email=' . $email;
				$title = "Xác thực đăng ký tài khoản tại NPC Shop";
				$to_email = $email;
				$message_data = [
					'name' => $name,
					'url' => $fullurl
				];

				// Truyền $message_data với đường dẫn đầy đủ
				$this->send_mail($to_email, $title, $message_data);
				redirect(base_url('/dang-nhap'));
			} else {
				$this->session->set_flashdata('error', 'Đăng nhập không thành công');
				redirect(base_url('/dang-nhap'));
			}
		} else {
			$this->dang_ky();
		}
	}

	public function guarantee()
	{
		$this->load->view('pages/template/header', $this->data);
		// $this->load->view('pages/template/slider');
		$this->load->view('pages/guarantee');
		$this->load->view('pages/template/footer');
	}
	public function security()
	{
		$this->load->view('pages/template/header', $this->data);
		// $this->load->view('pages/template/slider');
		$this->load->view('pages/security');
		$this->load->view('pages/template/footer');
	}
	public function information()
	{
		$this->load->view('pages/template/header', $this->data);
		// $this->load->view('pages/template/slider');
		$this->load->view('pages/information');
		$this->load->view('pages/template/footer');
	}


	public function xac_thuc_dang_ky()
	{
		if (isset($_GET['email']) && isset($_GET['token'])) {
			$token = $_GET['token'];
			$email = $_GET['email'];
			$data['get_customer'] = $this->IndexModel->getCustomerToken($email); // Sử dụng IndexModel đã nạp
			$token_rand = rand(0000, 9999);
			foreach ($data['get_customer'] as $key => $val) {
				if ($token != $val->token) {
					$this->session->set_flashdata('error', 'Kích hoạt tài khoản thất bại!');
					redirect(base_url('/dang-nhap'));
				}
				$data_customer = [
					'status' => 1,
					'token' => $token_rand, // Lưu token mới
				];
				$active_customer = $this->IndexModel->activeCustomerToken($email, $data_customer); // Sử dụng IndexModel đã nạp
				$this->session->set_flashdata('success', 'Kích hoạt tài khoản thành công!');
				redirect(base_url('/dang-nhap'));
			}
		} else {
			$this->session->set_flashdata('error', 'Email hoặc token không được cung cấp.');
			redirect(base_url('/dang-nhap'));
		}
	}



	public function confirm_checkout()
	{
		$this->form_validation->set_rules('name', 'Họ tên', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('location', 'Địa chỉ', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('phone', 'Số điện thoại', 'trim|required', ['required' => 'Vui lòng nhập %s.']);

		if ($this->form_validation->run()) {
			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$location = $this->input->post('location');
			$shipping_method = $this->input->post('shipping_method');
			$data = array(
				'name' => $name,
				'email' => $email,
				'method' => $shipping_method,
				'location' => $location,
				'phone' => $phone
			);
			$this->load->model('loginModel');
			$result = $this->loginModel->newShipping($data);
			if ($result) {
				$order_code = random_int(00, 9999);
				$data_order = array(
					'order_code' => $order_code,
					'ship_id' => $result,
					'status' => 1
				);
				$insert_order = $this->loginModel->insert_order($data_order);
				//order_details
				foreach ($this->cart->contents() as $items) {
					$data_order_details = array(
						'order_code' => $order_code,
						'product_id' => $items['id'],
						'quantity' => $items['qty']
					);
					$insert_order_details = $this->loginModel->insert_order_details($data_order_details);
				}

				$this->cart->destroy();
				//send mail after checkout
				$message_data = array('name' => $name, 'order_code' => $order_code);
				$this->send_mail_comfirm_checkout($email, 'NPC Shop đã nhận được đơn hàng của bạn', $message_data);
				redirect(base_url('/thanks'));
			} else {
				$this->session->flashdata('error', 'Đăng nhập không thành công');
				redirect(base_url('/checkout'));
			}
		} else {
			$this->checkout();
		}

	}
	public function send_mail($to_email, $title, $message_data)
	{
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_user'] = 'npcshop123@gmail.com';
		$config['smtp_pass'] = 'zncu iulr uecc gpnp';
		$config['smtp_port'] = 465;
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->from('npcshop123@gmail.com', 'NPC Shop');
		$this->email->to($to_email);

		// Tạo nội dung email xác nhận đăng ký
		$message = "Xin chào " . $message_data['name'] . ",<br />";
		$message .= "Vui lòng kích hoạt tài khoản bằng cách click vào: <a href='" . $message_data['url'] . "'>" . $message_data['url'] . "</a>";

		$this->email->subject($title);
		$this->email->message($message);

		if (!$this->email->send()) {
			show_error($this->email->print_debugger());
		}
	}



	public function send_mail_comfirm_checkout($to_email, $title, $message_data)
	{
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_user'] = 'npcshop123@gmail.com';
		$config['smtp_pass'] = 'zncu iulr uecc gpnp';
		$config['smtp_port'] = 465;
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->from('npcshop123@gmail.com', 'NPC Shop');
		$this->email->to($to_email);

		// Đọc nội dung file HTML
		$message = file_get_contents('./logo/mail.html');

		// Thay thế các placeholder trong HTML bằng dữ liệu thật (nếu cần)
		$message = str_replace('{name}', $message_data['name'], $message);
		$message = str_replace('{order_code}', $message_data['order_code'], $message);
		// Thay thế thêm các giá trị khác nếu cần

		$this->email->subject($title);
		$this->email->message($message);

		if (!$this->email->send()) {
			show_error($this->email->print_debugger());
		}
	}

	public function dang_xuat()
	{
		$this->session->unset_userdata('LoggedInCustomer');
		redirect(base_url('/dang-nhap'));
	}
	public function review_send()
	{
		$data = [
			'product_id' => $this->input->post('pro_id'),
			'name' => $this->input->post('name_reviewer'),
			'email' => $this->input->post('email_reviewer'),
			'review' => $this->input->post('review_reviewer'),
			'status' => 0,
		];
		$result = $this->IndexModel->insertReview($data);
	}
	public function review_list($page = 1)
	{
		if ($page <= 0) {
			$page = 1;
		}
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');

		$config = array();
		$config["base_url"] = base_url() . 'danh-sach-review/';
		$config["total_rows"] = $this->IndexModel->countAllReviews();
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
		$data['review_list_pagination'] = $this->IndexModel->getAllReviewsPaginated($config["per_page"], $offset);

		$this->load->view('review/list', $data);
		$this->load->view('adminTemplate/footer');
	}


	public function edit_review($id)
	{
		$this->load->model('IndexModel');
		$data['review'] = $this->IndexModel->selectReviewById($id);
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');
		$this->load->view('review/edit', $data);
		$this->load->view('adminTemplate/footer');
	}

	public function update_review($id)
	{
		$this->form_validation->set_rules('status', 'Trạng thái', 'trim|required', ['required' => 'Vui lòng chọn %s.']);

		if ($this->form_validation->run() == TRUE) {
			$data = [
				'status' => $this->input->post('status')
			];

			$this->load->model('IndexModel');
			$this->IndexModel->updateReview($id, $data);
			$this->session->set_flashdata('success', 'Cập nhật đánh giá thành công');
			redirect('review/list');
		} else {
			$this->edit_review($id);
		}
	}


	public function comment_contact_list($page = 1)
	{
		if ($page <= 0) {
			$page = 1;
		}
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');

		$config = array();
		$config["base_url"] = base_url() . 'danh-sach-binh-luan/';
		$config["total_rows"] = $this->IndexModel->countAllComments();
		$config["per_page"] = 5;
		$config["uri_segment"] = 2; // Điều chỉnh số phân đoạn URI để tương thích với cấu trúc URL của bạn
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
		$data['comment_list_pagination'] = $this->IndexModel->getAllCommentsPaginated($config["per_page"], $offset);

		$this->load->view('commentContact/list', $data);
		$this->load->view('adminTemplate/footer');
	}
	public function huong_dan(){
		$this->config->config["pageTitle"] = 'Hướng dẫn đặt hàng';
        $this->load->view('pages/template/header',$this->data);
		// $this->load->view('pages/template/slider');
		$this->load->view('pages/huongdan');
		$this->load->view('pages/template/footer');
	}


}
