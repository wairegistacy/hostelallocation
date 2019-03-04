<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28/11/2018
 * Time: 21:58
 */

class Admin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}
	public function add_record($data)
	{

		$this->database->insert('admin', $data);



		return true;

	}
}
