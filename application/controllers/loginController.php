<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loginController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login/index');
		$this->load->view('template/footer');
	}

	public function register_admin()
	{
		$this->load->view('template/header');
		$this->load->view('registerAdmin/index');
		$this->load->view('template/footer');
	}

	public function register_insert()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('username', 'Username', 'trim|required', ['required' => 'Vui lòng nhập %s.']);

		if ($this->form_validation->run()) {
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$this->load->model('loginModel');
			$data = [
				'username' => $username,
				'email' => $email,
				'password' => $password,
				'status' => 1
			];
			$result = $this->loginModel->registerAdmin($data);
			if ($result) {
				redirect(base_url('/login'));
			} else {
				redirect(base_url('/register-admin'));
			}
		} else {
			$this->index();
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Vui lòng nhập %s.']);

		if ($this->form_validation->run()) {

			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			
			$this->load->model('loginModel');
			$result = $this->loginModel->checkLogin($email, $password);
			if ($result) {
				$is_owner = $result[0]->email === 'owner@gmail.com' ? 1 : 0;
				$session_array = [
					'id' => $result[0]->id,
					'username' => $result[0]->username,
					'email' => $result[0]->email,
					'is_owner' => $is_owner
				];
				$this->session->set_userdata('LoggedIn', $session_array);
				$this->session->set_flashdata('succes', 'Đăng nhập thành công');

				redirect(base_url('dashboard'));
			} else {
				$this->session->set_flashdata('error', 'Đăng nhập không thành công');
				redirect(base_url('login'));
			}
		} else {
			$this->index();
		}
	}

	public function list()
	{

		$this->load->model('loginModel');
		$data['admins'] = $this->loginModel->get_all_admins();
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');
		$this->load->view('adminManage/list', $data);
		$this->load->view('adminTemplate/footer');
	}
	public function delete_admin($id)
	{
		$this->load->model('loginModel');
		$this->loginModel->delete_admin($id);
		redirect(base_url('adminManage/list'));
	}

	public function edit($id)
	{
		$this->load->model('loginModel');
		$data['admins'] = $this->loginModel->get_admin_by_id($id);
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/navbar');	
		$this->load->view('adminManage/edit', $data);
		$this->load->view('adminTemplate/footer');
	}
	public function update($id)
{
    $this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
    $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
    $this->form_validation->set_rules('username', 'Username', 'trim|required', ['required' => 'Vui lòng nhập %s.']);
    
    if ($this->form_validation->run()) {
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $status = $this->input->post('status');
        
        $this->load->model('loginModel');
        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'status' => $status
        ];
        
        $result = $this->loginModel->update_admin($id, $data);
        
        if ($result) {
            log_message('debug', 'Update successful: ' . json_encode($data));
            $this->session->set_flashdata('success', 'Cập nhật thành công');
            redirect(base_url('adminManage/list'));
        } else {
            log_message('error', 'Update failed: ' . json_encode($data));
            $this->session->set_flashdata('error', 'Cập nhật không thành công');
            redirect(base_url('adminManage/edit/' . $id));
        }
    } else {
        log_message('debug', 'Form validation failed');
        $this->edit($id);
    }
}


}
?>