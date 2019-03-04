<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22/11/2018
 * Time: 12:14
 */

class Auth_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
  	$this->load->database();
	}
	public function add_record($data)
	{
		$this->database->insert('outreach_details', $data);

		$this->database->insert('outreach_participants', $data);


			return true;

	}

}
