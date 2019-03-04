<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28/11/2018
 * Time: 21:55
 */

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->database();

		if(!isset($_SESSION['user_logged'])){
			$this->session->set_flashdata("error","Please log in first to view this page");
			redirect("admin/adminlogin");
		}
	}

	public function adminlogout(){
		redirect("admin/adminlogin","refresh");

	}

	public function adminprofile()
	{
		$this->load->view('adminprofile');
	}
	public function adminlogin()
	{
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('password', 'password', 'min_length[5]');

		if ($this->form_validation->run() == TRUE) {
			$name = $_POST['name'];
			$password = $_POST['password'];

			//check user in the database

			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where(array('name' => $name, 'password' => $password));
			$query = $this->db->get();

			$admin = $query->row();

			//if admin exists

			if ($admin->email) {
				//temporary message
				$this->session->set_flashdata("success", "You are logged in");

				$_SESSION['user_logged'] = TRUE;
				$_SESSION['name'] = $admin->name;

				//redirect to profile page

				redirect("admin/adminprofile", "refresh");

			} else {
				$this->session->set_flashdata("error", "Invalid. Please register.");

				redirect("admin/adminlogin", "refresh");
			}
		}
		$this->load->view('adminlogin');

	}
	public function adminregister()
	{

		if(isset($_POST['adminregister']))
		{
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('phone','phone','required');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('password','password','min_length[5]');
			$this->form_validation->set_rules('confirm password','confirm password','min_length[5]');

		}

		//if form validation true
		if($this->form_validation->run() == TRUE)
		{
			echo 'Registered successfully';

//		add user in database
			$data  = array(
				'name' =>$_POST['name'],
				'phone' =>$_POST['phone'],
				'email' =>$_POST['email'],
				'password' =>$_POST['password']

			);

			$this->db->insert('admin',$data);

			$this->session->set_flashdata("success","The administrator has been registered.");
			redirect("admin/adminregistered","refresh");

		}

		$this->load->view('adminregister');

	}
	public function adminregistered()
	{

		$this->load->view('adminregistered');
	}

	public function ownerregister()
	{

		if(isset($_POST['ownerregister']))
		{
			$this->form_validation->set_rules('nationalId','nationalId','min_length[5]');
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('hostelname','hostelname','required');
			$this->form_validation->set_rules('phone','phone','required');
			$this->form_validation->set_rules('password','password','min_length[5]');
			$this->form_validation->set_rules('confirm password','confirm password','min_length[5]');

		}

		//if form validation true
		if($this->form_validation->run() == TRUE)
		{
			echo 'Registered successfully';

//		add user in database
			$data  = array(
				'hostelname' =>$_POST['hostelname'],
				'phone' =>$_POST['phone'],
				'nationalId' =>$_POST['nationalId'],
				'name' =>$_POST['name'],
				'password' =>md5($_POST['password'])
			);

			$this->db->insert('owner',$data);

			$this->session->set_flashdata("success","The administrator has been registered.");
			redirect("admin/ownerregistered","refresh");

		}

		$this->load->view('ownerregister');

	}


}
