<?php
defined('BASEPATH') or exit('No direct script access allowed');

class brandController extends CI_Controller
{
	public function checkLogin()
	{
		if (!$this->session->userdata('LoggedIn')) {
			redirect(base_url('/login'));
		}
	}


	public function list()
	{
		$this->checkLogin();
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');

		$this->load->model('brandModel');
		$data['brand'] = $this->brandModel->selectBrand();

		$this->load->view('brand/list', $data);
		$this->load->view('adminTemplate/footer');

	}
	public function create()
	{
		$this->checkLogin();
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');
		$this->load->view('brand/create');
		$this->load->view('adminTemplate/footer');

	}
	public function edit($id)
	{
		$this->checkLogin();
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');
		$this->load->model('brandModel');
		$data['brand'] = $this->brandModel->selectBrandById($id);
		$this->load->view('brand/edit', $data);
		$this->load->view('adminTemplate/footer');

	}
	public function update($id)
	{
		$this->form_validation->set_rules('title', 'Tên thương hiệu', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('description', 'Mô tả', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required', ['required' => 'Vui lòng nhập %s.']);


		if ($this->form_validation->run() == TRUE) {
			if (!empty($_FILES['image']['name'])) {
				$ori_filename = $_FILES['image']['name'];
				$new_name = time() . "" . str_replace(' ', '-', $ori_filename);
				$config = [
					'upload_path' => './uploads/brand',
					'allowed_types' => 'gif|jpg|png|jpeg',
					'file_name' => $new_name,
				];
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('adminTemplate/header');
					$this->load->view('adminTemplate/navbar');
					$this->load->view('brand/create', $error);
					$this->load->view('adminTemplate/footer');

				} else {
					$brand_filename = $this->upload->data('file_name');
					$data = [
						'title' => $this->input->post('title'),
						'description' => $this->input->post('description'),
						'slug' => $this->input->post('slug'),
						'status' => $this->input->post('status'),
						'image' => $brand_filename

					];
				}
			} else {
				$data = [
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'slug' => $this->input->post('slug'),
					'status' => $this->input->post('status')
				];
			}

			$this->load->model('brandModel');
			$this->brandModel->updateBrand($id,$data);
			$this->session->set_flashdata('success', 'Sửa thương hiệu thành công');
			redirect(base_url('brand/list'));
		} else {
			$this->edit($id);
		}
	}
	public function store()
	{
		$this->form_validation->set_rules('title', 'Tên thương hiệu', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('description', 'Mô tả', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required', ['required' => 'Vui lòng nhập %s.']);


		if ($this->form_validation->run() == TRUE) {
			$ori_filename = $_FILES['image']['name'];
			$new_name = time() . "" . str_replace(' ', '-', $ori_filename);
			$config = [
				'upload_path' => './uploads/brand',
				'allowed_types' => 'gif|jpg|png|jpeg',
				'file_name' => $new_name,
			];
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('adminTemplate/header');
				$this->load->view('adminTemplate/navbar');
				$this->load->view('brand/create', $error);
				$this->load->view('adminTemplate/footer');

			} else {
				$brand_filename = $this->upload->data('file_name');
				$data = [
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'slug' => $this->input->post('slug'),
					'status' => $this->input->post('status'),
					'image' => $brand_filename

				];
				$this->load->model('brandModel');
				$this->brandModel->insertBrand($data);
				$this->session->set_flashdata('success', 'Thêm thương hiệu thành công');
				redirect(base_url('brand/list'));
			}

		} else {
			$this->create();
		}
	}
	public function delete($id) {
		$this->load->model('brandModel');
		$this->brandModel->deleteBrand($id);
		$this->session->set_flashdata('success', 'Thêm thương hiệu thành công');
		redirect(base_url('brand/list'));
	}
}
