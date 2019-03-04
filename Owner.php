<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28/11/2018
 * Time: 23:04
 */

class Owner extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->database();

		if(!isset($_SESSION['user_logged'])){
			$this->session->set_flashdata("error","Please log in first to view this page");
			redirect("admin/login");
		}
	}

	public function ownerlogout(){
		redirect("admin/adminlogin","refresh");

	}

	public function ownerprofile()
	{
		$this->load->view('ownerprofile');
	}

	public function ownerlogin()
	{
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('password', 'password', 'min_length[5]');

		if ($this->form_validation->run() == TRUE) {
			$name = $_POST['name'];
			$password = md5($_POST['password']);

			//check user in the database

			$this->db->select('*');
			$this->db->from('owner');
			$this->db->where(array('name' => $name, 'password' => $password));
			$query = $this->db->get();

			$owner = $query->row();

			//if admin exists

			if ($owner->email) {
				//temporary message
				$this->session->set_flashdata("success", "You are logged in");

				$_SESSION['user_logged'] = TRUE;
				$_SESSION['name'] = $owner->name;

				//redirect to profile page

				redirect("owner/ownerprofile", "refresh");

			} else {
				$this->session->set_flashdata("error", "Invalid. Please register.");

				redirect("owner/ownerlogin", "refresh");
			}
		}
		$this->load->view('ownerlogin');

	}

}
