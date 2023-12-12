<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
    }
    public function index()
	{
        $carousel = $this->db->select('*')->from('carousel')->get()->result_array();
		$this->db->order_by('judul','ASC');
	    $data = array (
            'carousel'      => $carousel

        );
		$this->template->load('template_admin', 'admin/carousel_index', $data);
	}
	public function save(){
        $namafoto = date('YmdHis').'.jpg';
		$config['upload_path']		= 'assets/upload/carousel/';
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
			redirect('admin/carousel');
		} elseif(!$this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
		} else{
			$data = array('upload_data' => $uploaded_data = $_FILES['foto']);
		}

		$data = array(
			'judul' => $this->input->post('judul'),
			'foto' => $namafoto,
		);
		$this->db->insert('carousel', $data);
		$this->session->set_flashdata('alert', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Carousel Has Been Added!!!
			 </div>
			');
		redirect('admin/carousel');
	}
	public function delete($id) {
		$filename=FCPATH.'/assets/upload/carousel/'.$id;
			if(file_exists($filename)){
				unlink("./assets/upload/carousel/".$id);
			}
        $this->load->database();
        $this->db->where('foto', $id);
        $this->db->delete('carousel');
		$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Carousel Has Been Delete!!!
			 </div>
			');
        redirect('admin/Carousel');
    }
}