<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
    }
    public function index()
	{
        $this->db->select('*')->from('about');
        $about = $this->db->get()->result_array();
		$data['about'] = $about;

		$this->template->load('template_admin', 'admin/about', $data);
	}
	// public function save(){
    //     $namafoto = date('YmdHis').'.jpg';
	// 	$config['upload_path']		= 'assets/upload/about/';
	// 	$config['max_size'] 		= 500 * 1024;
	// 	$config['file_name'] 		= $namafoto;
	// 	$config['allowed_types']	= '*';
	// 	$this->load->library('upload', $config);
	// 	if($_FILES['foto_aseli']['size'] >= 500 * 1024){
	// 		$this->session->set_flashdata('alert', '
	// 		<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 			<i class="fa fa-exclamation-circle me-2"></i>  The photo size is too large, maximum size is 500kb
	// 		 </div>
	// 		');
	// 		redirect('admin/about');
	// 	} elseif(!$this->upload->do_upload('foto_aseli')){
	// 		$error = array('error' => $this->upload->display_errors());
	// 	} else{
	// 		$data = array('upload_data' => $uploaded_data = $_FILES['foto_aseli']);
	// 	}
		
	// 	$data = array(
	// 		'informasi' => $this->input->post('informasi'),
	// 		'foto_aseli' => $namafoto,
	// 		'header' => $this->input->post('header'),
	// 		'nama_aseli' => $this->input->post('nama_aseli'),
	// 	);
	// 	$this->db->insert('about', $data);
	// 	$this->session->set_flashdata('alert', '
	// 		<div class="alert alert-success alert-dismissible fade show" role="alert">
	// 			<i class="fa fa-exclamation-circle me-2"></i> Info Has Been Added!!!
	// 		 </div>
	// 		');
	// 	redirect('admin/about
	// 	 ');
	// }
	// public function delete($id) {
	// 	$filename=FCPATH.'/assets/upload/konten/'.$id;
	// 		if(file_exists($filename)){
	// 			unlink("./assets/upload/konten/".$id);
	// 		}
    //     $this->load->database();
    //     $this->db->where('foto', $id);
    //     $this->db->delete('konten');
	// 	$this->session->set_flashdata('alert', '
	// 		<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 			<i class="fa fa-exclamation-circle me-2"></i> Content Has Been Delete!!!
	// 		 </div>
	// 		');
    //     redirect('admin/konten');
    // }
	public function edit($id){
		$this->db->select('*')->from('about');
		$this->db->where('judul', $id);
		$about = $this->db->get()->result_array();
		$data['about'] = $about;
	
	}
	public function update(){
		$namafoto = $this->input->post('nama_foto');
		$config['upload_path']		= 'assets/upload/about/';
		$config['max_size'] 		= 500 * 1024;
		$config['file_name'] 		= $namafoto;
		$config['overwrite'] 		= true;
		$config['allowed_types']	= '*';
		$this->load->library('upload', $config);
		if($_FILES['foto_aseli']['size'] >= 500 * 1024){
			$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i>  The photo size is too large, maximum size is 500kb
			 </div>
			');
			redirect('admin/about');
		} elseif(!$this->upload->do_upload('foto_aseli')){
			$error = array('error' => $this->upload->display_errors());
		} else{
			$data = array('upload_data' => $uploaded_data = $_FILES['foto_aseli']);
		}
		$data = array(
			'informasi' => $this->input->post('informasi'),
			'foto_aseli' => $namafoto,
			'header' => $this->input->post('header'),
			'nama_aseli' => $this->input->post('nama_aseli'),
			'ttl' => $this->input->post('ttl'),
			'hobby' => $this->input->post('hobby'),
		);
		$where = array(
			'foto_aseli'		=> $this->input->post('nama_foto'),
		);
		$this->db->update('about', $data,$where);
		$this->session->set_flashdata('alert', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Own Profile Has Been Edited!!!
			 </div>
			');
		redirect('admin/about');
	}
}