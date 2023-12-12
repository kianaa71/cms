<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
    }
    public function index()
	{
        $kategori = $this->db->select('*')->from('kategori')->get()->result_array();
		$this->db->order_by('nama_kategori','ASC');
		$data['kategori'] = $kategori;

		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$data['konten'] = $konten;
		$this->template->load('template_admin', 'admin/konten_index', $data);
	}
	public function save(){
        $namafoto = date('YmdHis').'.jpg';
		$config['upload_path']		= 'assets/upload/konten/';
		$config['max_size'] 		= 500 * 1024;
		$config['file_name'] 		= $namafoto;
		$config['allowed_types']	= '*';
		$this->load->library('upload', $config);
		if($_FILES['foto']['size'] >= 500 * 1024){
			$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i>  The photo size is too large, maximum size is 500kb
			 </div>
			');
			redirect('admin/konten');
		} elseif(!$this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
		} else{
			$data = array('upload_data' => $uploaded_data = $_FILES['foto']);
		}

		$this->db->from('konten');
		$this->db->where('judul', $this->input->post('judul'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Title Already Exist!!!
			 </div>
			');
        redirect('admin/konten');
		}
		$data = array(
			'judul' => $this->input->post('judul'),
			'id_kategori' => $this->input->post('id_kategori'),
			'keterangan' => $this->input->post('keterangan'),
			'tanggal' => date('Y-m-d'),
			'foto' => $namafoto,
			'username' => $this->session->userdata('nama'),
			'slug' => str_replace(' ','-',$this->input->post('judul')),
		);
		$this->db->insert('konten', $data);
		$this->session->set_flashdata('alert', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Content Has Been Added!!!
			 </div>
			');
		redirect('admin/konten
		 ');
	}
	public function delete($id) {
		$filename=FCPATH.'/assets/upload/konten/'.$id;
			if(file_exists($filename)){
				unlink("./assets/upload/konten/".$id);
			}
        $this->load->database();
        $this->db->where('foto', $id);
        $this->db->delete('konten');
		$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Content Has Been Delete!!!
			 </div>
			');
        redirect('admin/konten');
    }
	public function edit($id){
		$this->db->select('*')->from('konten');
		$this->db->where('judul', $id);
		$konten = $this->db->get()->result_array();
		$data['konten'] = $konten;
	
	}
	public function update(){
		$namafoto = $this->input->post('nama_foto');
		$config['upload_path']		= 'assets/upload/konten/';
		$config['max_size'] 		= 500 * 1024;
		$config['file_name'] 		= $namafoto;
		$config['overwrite'] 		= true;
		$config['allowed_types']	= '*';
		$this->load->library('upload', $config);
		if($_FILES['foto']['size'] >= 500 * 1024){
			$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i>  The photo size is too large, maximum size is 500kb
			 </div>
			');
			redirect('admin/konten');
		} elseif(!$this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
		} else{
			$data = array('upload_data' => $uploaded_data = $_FILES['foto']);
		}
		$data = array(
			'judul' => $this->input->post('judul'),
			'id_kategori' => $this->input->post('id_kategori'),
			'keterangan' => $this->input->post('keterangan'),
			'slug' => str_replace(' ','-',$this->input->post('judul')),
		);
		$where = array(
			'foto'		=> $this->input->post('nama_foto'),
		);
		$this->db->update('konten', $data,$where);
		$this->session->set_flashdata('alert', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Content Has Been Edited!!!
			 </div>
			');
		redirect('admin/konten');
	}
}