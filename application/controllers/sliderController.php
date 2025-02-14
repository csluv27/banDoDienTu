<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sliderController extends CI_Controller
{
  public function checkLogin()
  {
    if (!$this->session->userdata('LoggedIn')) {
      redirect(base_url('/login'));
    }
  }
  public function create()
  {
    $this->checkLogin();
    $this->load->view('adminTemplate/header');
    $this->load->view('adminTemplate/navbar');
    $this->load->view('slider/create');
    $this->load->view('adminTemplate/footer');
  }
  public function list()
  {
    $this->checkLogin();
    $this->load->view('adminTemplate/header');
    $this->load->view('adminTemplate/navbar');
    $this->load->model('sliderModel');
		$data['slider'] = $this->sliderModel->selectSlider();
    $this->load->view('slider/list',$data);
    $this->load->view('adminTemplate/footer');

  }
  public function edit($id)
  {
    $this->checkLogin();
    $this->load->view('adminTemplate/header');
    $this->load->view('adminTemplate/navbar');
    $this->load->model('sliderModel');
		$data['slider'] = $this->sliderModel->selectSliderById($id);
    $this->load->view('slider/edit',$data);
    $this->load->view('adminTemplate/footer');

  }
  public function update($id)
  {
    $this->form_validation->set_rules('title', 'Tên slider', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
    $this->form_validation->set_rules('description', 'Mô tả', 'trim|required', ['required' => 'Vui lòng nhập %s.']);

    if ($this->form_validation->run() == TRUE) {
      if (!empty($_FILES['image']['name'])) {
        $ori_filename = $_FILES['image']['name'];
        $new_name = time() . "" . str_replace(' ', '-', $ori_filename);
        $config = [
          'upload_path' => './uploads/slider',
          'allowed_types' => 'gif|jpg|png|jpeg',
          'file_name' => $new_name,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
          $error = array('error' => $this->upload->display_errors());
          $this->load->view('adminTemplate/header');
          $this->load->view('adminTemplate/navbar');
          $this->load->view('slider/create', $error);
          $this->load->view('adminTemplate/footer');

        } else {
          $slider_filename = $this->upload->data('file_name');
          $data = [
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
           
            'status' => $this->input->post('status'),
            'image' => $slider_filename

          ];
        }
      } else {
        $data = [
          'title' => $this->input->post('title'),
          'description' => $this->input->post('description'),
        
          'status' => $this->input->post('status')
        ];
      }

      $this->load->model('sliderModel');
      $this->sliderModel->updateSlider($id, $data);
      $this->session->set_flashdata('success', 'Sửa thương hiệu thành công');
      redirect(base_url('slider/list'));
    } else {
      $this->edit($id);
    }
  }
  public function store()
  {
    $this->form_validation->set_rules('title', 'Tên thương hiệu', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
    $this->form_validation->set_rules('description', 'Mô tả', 'trim|required', ['required' => 'Vui lòng nhập %s.']);

    if ($this->form_validation->run() == TRUE) {
      $ori_filename = $_FILES['image']['name'];
      $new_name = time() . "" . str_replace(' ', '-', $ori_filename);
      $config = [
        'upload_path' => './uploads/slider',
        'allowed_types' => 'gif|jpg|png|jpeg',
        'file_name' => $new_name,
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('adminTemplate/header');
        $this->load->view('adminTemplate/navbar');
        $this->load->view('slider/create', $error);
        $this->load->view('adminTemplate/footer');

      } else {
        $slider_filename = $this->upload->data('file_name');
        $data = [
          'title' => $this->input->post('title'),
          'description' => $this->input->post('description'),
          
          'status' => $this->input->post('status'),
          'image' => $slider_filename

        ];
        $this->load->model('sliderModel');
        $this->sliderModel->insertSlider($data);
        $this->session->set_flashdata('success', 'Thêm thương hiệu thành công');
        redirect(base_url('slider/list'));
      }

    } else {
      $this->create();
    }
  }
  public function delete($id)
  {
    $this->load->model('sliderModel');
    $this->sliderModel->deleteslider($id);
    $this->session->set_flashdata('success', 'Thêm thương hiệu thành công');
    redirect(base_url('slider/list'));
  }

}
