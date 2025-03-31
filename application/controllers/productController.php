<?php
defined('BASEPATH') or exit('No direct script access allowed');

class productController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('productModel');
		$this->load->library('pagination');
	}
	public function checkLogin()
	{
		if (!$this->session->userdata('LoggedIn')) {
			redirect(base_url('/login'));
		}
	}


	public function list($page = 1)
{
    $this->checkLogin();
    $this->load->view('adminTemplate/header');
    $this->load->view('adminTemplate/navbar');
		
    // Configuring pagination
    $config = array();
    $config["base_url"] = base_url() . 'danh-sach-san-pham/';
    $config["total_rows"] = $this->productModel->countAllProducts(); // Count total products
    $config["per_page"] = 10; // Number of products per page
    $config["uri_segment"] = 2; // Page number segment in URL
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

    $this->pagination->initialize($config); // Initialize pagination

    $offset = ($page - 1) * $config["per_page"]; // Calculate offset
    $data["links"] = $this->pagination->create_links(); // Create pagination links

    // Fetching paginated products
    $data['allproductAdmin_pagination'] = $this->productModel->getAllProductsPaginated($config["per_page"], $offset);
		$data['page'] = $page;
    $this->load->view('product/list', $data);
    $this->load->view('adminTemplate/footer');
}


	public function create()
	{
		$this->checkLogin();
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');

		$this->load->model('brandModel');
		$data['brand'] = $this->brandModel->selectBrand();
		$this->load->model('categoryModel');
		$data['category'] = $this->categoryModel->selectCategory();

		$this->load->view('product/create', $data);
		$this->load->view('adminTemplate/footer');

	}
	public function edit($id)
	{
		$this->checkLogin();
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');

		$this->load->model('brandModel');
		$data['brand'] = $this->brandModel->selectBrand();
		$this->load->model('categoryModel');
		$data['category'] = $this->categoryModel->selectCategory();

		$this->load->model('productModel');
		$data['product'] = $this->productModel->selectProductById($id);

		$this->load->view('product/edit', $data);
		$this->load->view('adminTemplate/footer');

	}
	public function update($id)
	{
		$this->form_validation->set_rules('title', 'Tên danh mục', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('description', 'Mô tả', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('price', 'Giá', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('quantity', 'Số lượng', 'trim|required', ['required' => 'Vui lòng nhập %s.']);


		if ($this->form_validation->run() == TRUE) {
			if (!empty($_FILES['image']['name'])) {
				$ori_filename = $_FILES['image']['name'];
				$new_name = time() . "" . str_replace(' ', '-', $ori_filename);
				$config = [
					'upload_path' => './uploads/product',
					'allowed_types' => 'gif|jpg|png|jpeg',
					'file_name' => $new_name,
				];
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('adminTemplate/header');
					$this->load->view('adminTemplate/navbar');
					$this->load->view('product/create', $error);
					$this->load->view('adminTemplate/footer');

				} else {
					$prod_filename = $this->upload->data('file_name');
					$data = [
						'title' => $this->input->post('title'),
						'description' => $this->input->post('description'),
						'slug' => $this->input->post('slug'),
						'price' => $this->input->post('price'),
						'quantity' => $this->input->post('quantity'),
						'category_id' => $this->input->post('category_id'),
						'brand_id' => $this->input->post('brand_id'),
						'status' => $this->input->post('status'),
						'image' => $prod_filename

					];
				}
			} else {
				$data = [
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'slug' => $this->input->post('slug'),
					'price' => $this->input->post('price'),
					'status' => $this->input->post('status')
				];
			}

			$this->load->model('productModel');
			$this->productModel->updateProduct($id, $data);
			$this->session->set_flashdata('success', 'Sửa danh mục thành công');
			redirect(base_url('product/list'));
		} else {
			$this->edit($id);
		}
	}
	public function store()
	{
		$this->form_validation->set_rules('title', 'Tên danh mục', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('description', 'Mô tả', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('price', 'Giá', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('quantity', 'Số lượng', 'trim|required', ['required' => 'Vui lòng nhập %s.']);


		if ($this->form_validation->run() == TRUE) {
			$ori_filename = $_FILES['image']['name'];
			$new_name = time() . "" . str_replace(' ', '-', $ori_filename);
			$config = [
				'upload_path' => './uploads/product',
				'allowed_types' => 'gif|jpg|png|jpeg',
				'file_name' => $new_name,
			];
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('adminTemplate/header');
				$this->load->view('adminTemplate/navbar');
				$this->load->view('product/create', $error);
				$this->load->view('adminTemplate/footer');

			} else {
				$prod_filename = $this->upload->data('file_name');
				$data = [
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'slug' => $this->input->post('slug'),
					'price' => $this->input->post('price'),
					'quantity' => $this->input->post('quantity'),
					'category_id' => $this->input->post('category_id'),
					'brand_id' => $this->input->post('brand_id'),
					'status' => $this->input->post('status'),
					'image' => $prod_filename

				];
				$this->load->model('productModel');
				$this->productModel->insertProduct($data);
				$this->session->set_flashdata('success', 'Thêm danh mục thành công');
				redirect(base_url('product/list'));
			}

		} else {
			$this->create();
		}
	}
	public function delete($id)
	{
		$this->load->model('productModel');
		$this->productModel->deleteProduct($id);
		$this->session->set_flashdata('success', 'Thêm danh mục thành công');
		redirect(base_url('product/list'));
	}
	public function get_top_selling_products() {
    $this->load->model('productModel');
    $data['top_selling_products'] = $this->productModel->get_top_products(3); // Giới hạn chỉ lấy 3 sản phẩm
    $this->load->view('home', $data);
}
}
