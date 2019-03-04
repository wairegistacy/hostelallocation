<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28/11/2018
 * Time: 23:04
 */

class Owner_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}
	public function add_record($data)
	{

		$this->database->insert('owner', $data);

		return true;

	}


}
