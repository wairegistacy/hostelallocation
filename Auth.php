<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22/11/2018
 * Time: 12:13
 */

class Auth extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
	   $this->load->database();
	}


	public function logout(){
		redirect("auth/login","refresh");

	}


	public function login()
	{
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('password', 'password', 'min_length[5]');

		if ($this->form_validation->run() == TRUE) {
			$name = $_POST['name'];
			$password = md5($_POST['password']);

			//check user in the database

			$this->db->select('*');
			$this->db->from('student');
			$this->db->where(array('name' => $name, 'password' => $password));
			$query = $this->db->get();

			$student = $query->row();

			//if student exists

			if ($student->email) {
				//temporary message
				$this->session->set_flashdata("success", "You are logged in");

				$_SESSION['user_logged'] = TRUE;
				$_SESSION['name'] = $student->name;

				//redirect to profile page

				redirect("auth/profile", "refresh");
			}else {
			$this->session->set_flashdata("error", "Invalid. Please register.");

			redirect("auth/login", "refresh");
		}

	}
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');

		if(isset($_POST['register']))
		{
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('password','password','min_length[5]');
			$this->form_validation->set_rules('confirm password','confirm password','min_length[5]');
			$this->form_validation->set_rules('phone','phone','required|min_length[5]');
            $this->form_validation->set_rules('gender','gender','required');
		}

		//if form validation true
if($this->form_validation->run() == TRUE)
		{
			echo 'Registered successfully';

//		add user in database
	$data  = array(
		'name' =>$_POST['name'],
		'email' =>$_POST['email'],
		'phone' =>$_POST['phone'],
		'address' =>$_POST['address'],
		'password' =>md5($_POST['password']),
		'gender' => $_POST ['gender']
	);

			$this->db->insert('student',$data);

			$this->session->set_flashdata("success","Your account has been registered. You can login");
	redirect("auth/login","refresh");

			}

	}
	public function adminlogout(){
		redirect("auth/adminlogin","refresh");

	}

	public function adminprofile()
	{
		$this->load->view('adminprofile');
	}
	public function profile()
	{

		$this->load->view('profile');
	}


public function madaraka()
	{
		$this->load->view('madaraka');
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

				redirect("auth/adminlogin", "refresh");
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
			redirect("auth/adminregistered","refresh");

		}

		$this->load->view('adminregister');

	}
	public function adminregistered()
	{

		$this->load->view('adminregistered');
	}

	public function administrators()
	{

		$this->load->view('administrators');
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
			redirect("auth/ownerregistered","refresh");

		}

		$this->load->view('ownerregister');

	}

	public function ownerlogout(){
		redirect("auth/ownerlogin","refresh");

	}

	public function ownerprofile()
	{
		$this->load->view('ownerprofile');
	}
	public function waridiprofile()
	{
		$this->load->view('waridiprofile');
	}
	public function taarifprofile()
	{
		$this->load->view('taarifprofile');
	}
	public function ayanaprofile()
	{
		$this->load->view('ayanaprofile');
	}
	public function ownerlogin()
	{
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('password', 'password', 'min_length[5]');

		if ($this->form_validation->run() == TRUE) {
			$name = $_POST['name'];
			$password = $_POST['password'];

			//check user in the database

			$this->db->select('*');
			$this->db->from('owner');
			$this->db->where(array('name' => $name, 'password' => $password));
			$query = $this->db->get();

			$owner = $query->row();

			//if admin exists

			if ($owner->hostelname) {
				//temporary message
				$this->session->set_flashdata("success", "You are logged in");

				$_SESSION['user_logged'] = TRUE;
				$_SESSION['name'] = $owner->name;

				//redirect to profile page

				redirect("auth/ownerprofile", "refresh");

			} else {
				$this->session->set_flashdata("error", "Invalid. Please register.");

				redirect("auth/ownerlogin", "refresh");
			}
		}
		$this->load->view('ownerlogin');

	}
	public function hostelregister()
	{

		if(isset($_POST['hostelregister']))
		{
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('mobile','mobile','required');
			$this->form_validation->set_rules('address','address','required');
			$this->form_validation->set_rules('sharing','sharing','min_length[1]');

		}

		//if form validation true
		if($this->form_validation->run() == TRUE)
		{
			echo 'Registered successfully';

//		add user in database
			$data  = array(
				'name' =>$_POST['name'],
				'mobile' =>$_POST['mobile'],
				'address' =>$_POST['address'],
				'sharing' =>$_POST['sharing']

			);

			$this->db->insert('hostel',$data);

			$this->session->set_flashdata("success","Hostel successfully registered.");
			redirect("auth/hostellogout","refresh");

		}

		$this->load->view('hostelregister');

	}
	public function waridibookings()
	{

		if(isset($_POST['waridibookings']))
		{
			$this->form_validation->set_rules('type','type','min_length[5]');
			$this->form_validation->set_rules('date','date','required');
			$this->form_validation->set_rules('hostelName','hostelName','required');

		}

		//if form validation true
		if($this->form_validation->run() == TRUE)
		{
			echo 'Registered successfully';

//		add user in database
			$data  = array(
				'type' =>$_POST['type'],
				'date' =>$_POST['date'],
				'hostelName' =>$_POST['hostelName'],
			);

			$this->db->insert('bookings',$data);

			$this->session->set_flashdata("success","You have booked.");
			redirect("auth/waridiprofile","refresh");

		}

		$this->load->view('waridibookings');

	}
	public function ayanabookings()
	{

		if(isset($_POST['ayanabookings']))
		{
			$this->form_validation->set_rules('type','type','min_length[5]');
			$this->form_validation->set_rules('date','date','required');
			$this->form_validation->set_rules('hostelName','hostelName','required');

		}

		//if form validation true
		if($this->form_validation->run() == TRUE)
		{
			echo 'Registered successfully';

//		add user in database
			$data  = array(
				'type' =>$_POST['type'],
				'date' =>$_POST['date'],
				'hostelName' =>$_POST['hostelName'],
			);

			$this->db->insert('bookings',$data);

			$this->session->set_flashdata("success","The administrator has been registered.");
			redirect("auth/ayanaprofile","refresh");

		}

		$this->load->view('ayanabookings');

	}
	public function taarifbookings()
	{

		if(isset($_POST['taarifbookings']))
		{
			$this->form_validation->set_rules('type','type','min_length[5]');
			$this->form_validation->set_rules('date','date','required');
			$this->form_validation->set_rules('hostelName','hostelName','required');

		}

		//if form validation true
		if($this->form_validation->run() == TRUE)
		{
			echo 'Registered successfully';

//		add user in database
			$data  = array(
				'type' =>$_POST['type'],
				'date' =>$_POST['date'],
				'hostelName' =>$_POST['hostelName'],
			);

			$this->db->insert('bookings',$data);

			$this->session->set_flashdata("success","The administrator has been registered.");
			redirect("auth/taarifprofile","refresh");

		}

		$this->load->view('taarifbookings');

	}
}
