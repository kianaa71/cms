<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
    }
    public function index()
	{
		$this->db->select('*')->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array();
		$data['kategori'] = $kategori;
		$this->template->load('template_admin', 'admin/kategori_index', $data);
	}
	public function save(){
		$this->db->from('kategori');
		$this->db->where('nama_kategori', $this->input->post('nama_kategori'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Kategories Already Exist!!!
			 </div>
			');
        redirect('admin/kategori');
		}
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori'),
		);
		$this->db->insert('kategori', $data);
		$this->session->set_flashdata('alert', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Kategories Has Been Added!!!
			 </div>
			');
		redirect('admin/kategori');
	}
	public function delete($id) {
        $this->load->database();
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
		$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Kategories Has Been Delete!!!
			 </div>
			');
        redirect('admin/kategori');
    }
	public function edit($id){
		$this->db->select('*')->from('kategori');
		$this->db->where('id_kategori', $id);
		$kategori = $this->db->get()->result_array();
		$data['kategori'] = $kategori;
		$this->template->load('template_admin', 'admin/kategori_edit', $data);

	}
	public function update(){
		$data = array(
			'nama_kategori'=> $this->input->post("nama_kategori"),
		);
		$where = array(
			'id_kategori' => $this->input->post("id_kategori")
		);
		$this->db->update('kategori', $data, $where);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i> Kategories Has Been Update!
         </div>
		');
		redirect('admin/kategori');
	}
}