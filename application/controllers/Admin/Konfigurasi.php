<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
    }
	public function index()
	{
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $data = array(
            'konfig'        => $konfig,
        );
		$this->template->load('template_admin', 'admin/konfigurasi', $data);
	}
    public function update(){
		$data = array(
			'judul_website'=> $this->input->post("judul_website"),
			'profil_website'=> $this->input->post("profil_website"),
			'instagram'=> $this->input->post("instagram"),
			'name'=> $this->input->post("name"),
			'email'=> $this->input->post("email"),
			'alamat'=> $this->input->post("alamat"),
			'no_wa'=> $this->input->post("no_wa"),
			'link'=> $this->input->post("link"),
			'linkedin'=> $this->input->post("linkedin"),
		);
		$where = array(
			'id_konfigurasi' => 1
		);
		$this->db->update('konfigurasi', $data, $where);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i> Configuration Has Been Update!
         </div>
		');
		redirect('admin/konfigurasi');
	}
}
