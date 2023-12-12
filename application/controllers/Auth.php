<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index() {
        $this->load->view('lojin');
    }

    public function cek_login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->row();
        if($cek==NULL){
            $this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Username Not Found!!!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			 </div>
			');
			redirect('auth');
        } else if($password == $cek->password){
            $data = array(
                'id_user' => $cek->id_user,
                'nama' => $cek->nama,
                'password' => $cek->password,
                'level' => $cek->level,
            );
            $this->session->set_userdata($data);
            redirect('admin/home');
        }else {
            $this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<i class="fa fa-exclamation-circle me-2"></i> Password mu salah Hmmm!!!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			 </div>
			');
			redirect('auth');
        }
    }

    public function log_out() {
        $this->session->sess_destroy();
        redirect('homie');
    }
}
