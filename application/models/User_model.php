<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model {
	public function save(){
        $data = array(
			'username'=> $this->input->post("username"),
			'password'=> $this->input->post("password"),
			'nama'=> $this->input->post("nama"),
			'level'=> $this->input->post("level"),
		);
		$this->db->insert('user',$data);
    }
}
