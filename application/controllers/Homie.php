<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homie extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(5);
		$recentPosts = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('carousel');
		$carousel = $this->db->get()->result_array();

		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$data = array(
			'judul'		=> "Home  | Junichiro",
			'konfig'	=>	$konfig,
			'recentPosts'	=>	$recentPosts,
			'kategori'	=>	$kategori,
			'carousel'	=>	$carousel,
			'konten'	=>	$konten,
		);
		$this->load->view('dashboard1', $data);
	}
	public function galeri(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(5);
		$recentPosts = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('gallery');
		$gallery = $this->db->get()->result_array();
		$data = array(
			'judul'		=> "Gallery  | Junichiro",
			'gallery'	=>	$gallery,
			'recentPosts'	=>	$recentPosts,
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
		);
		$this->load->view('gallery', $data);
	}
	public function artikel($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(5);
		$recentPosts = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
		$this->db->where('slug', $id);
		$konten = $this->db->get()->row();
		$data = array(
			'judul'		=>  $konten->judul. " | Junichiro",
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
			'konten'	=>	$konten,
			'recentPosts'	=>	$recentPosts,
		);
		$this->load->view('detail', $data);
	}
	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
 
		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(5);
		$recentPosts = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
		$this->db->where('konten.id_kategori', $id);
		$konten = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$mimi = $this->db->get()->row()->nama_kategori;
		$data = array(
			'judul'		=>  $mimi. " | Junichiro",
			'mimi'	=>	$mimi,
			'konfig'	=>	$konfig,
			'recentPosts'	=>	$recentPosts,
			'kategori'	=>	$kategori,
			'konten'	=>	$konten,
		);
		$this->load->view('apaantuh', $data);
	}
	public function search() {
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(5);
		$recentPosts = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$keyword = $this->input->post('keyword'); 
	
		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
		$this->db->like('judul', $keyword); 
		$konten = $this->db->get()->result_array();	
	
		$data = array(
			'judul'		=> "Search Results  | Junichiro",
			'konten' => $konten,
			'recentPosts' => $recentPosts,
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
		);
				// var_dump($this->db->last_query());
				// echo('<br>');
				// var_dump($konten);		
	
		$this->load->view('search_result', $data); 
	}
	public function about(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->select('*')->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(5);
		$recentPosts = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('about');
		$about = $this->db->get()->result_array();

		$data = array(
			'judul'		=> "About Me  | Junichiro",
			'about' => $about,
			'recentPosts' => $recentPosts,
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
		);

		$this->load->view('about', $data); 
	}
	
}
