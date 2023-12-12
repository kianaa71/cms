<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
		$this->load->model('User_model');
		if($this->session->userdata('level')<>'Admin') {
			redirect('auth');
		}
    }
    public function index()
	{
		$this->db->select('*')->from('user');
		$this->db->order_by('nama','ASC');
		$user = $this->db->get()->result_array();
		$data['user'] = $user;
		$this->template->load('template_admin', 'admin/user_index', $data);
	}
	public function save(){
		$this->db->from('user');
		$this->db->where('username', $this->input->post('username'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Username Has Been Used!!!
			 </div>
			');
        redirect('admin/user');
		}
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level'),
		);
		$this->db->insert('user', $data);
		$this->session->set_flashdata('alert', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> User Has Been Added!!!
			 </div>
			');
		redirect('admin/user');
	}
	public function delete_user($id) {
        $this->load->database();
        $this->db->where('username', $id);
        $this->db->delete('user');
		$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> User Has Been Delete!!!
			 </div>
			');
        redirect('admin/user');
    }
	public function edit_user($id){
		$this->db->select('*')->from('user');
		$this->db->where('id_user', $id);
		$user = $this->db->get()->result_array();
		$data['user'] = $user;
		$this->template->load('template_admin', 'admin/user_edit', $data);

	}
	public function update(){
		$data = array(
			'nama'=> $this->input->post("nama"),
			'level'=> $this->input->post("level")
		);
		$where = array(
			'id_user' => $this->input->post("id_user")
		);
		$this->db->update('user', $data, $where);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i> User Has Been Update!
         </div>
		');
		redirect('admin/user');
	}
}