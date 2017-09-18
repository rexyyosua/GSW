<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_gsw');
	}

	public function index()
	{
		$data['berita'] = $this->model_gsw->all_berita();
		$query_jadwal = $this->db->get('jadwal','6');
		$data['jadwal'] = $query_jadwal->result();

		$this->load->view('welcome_message',$data);
	}
	public function detail_berita($id)
	{
		$data['list'] = $this->model_gsw->all_berita();
		$data['berita'] = $this->model_gsw->find_berita($id);
		$data['komen'] = $this->model_gsw->find_komen($id);
		$this->load->view('berita_detail',$data);
	}
	public function team()
	{
		$this->load->library('pagination');
		$query = $this->db->get('team','6',$this->uri->segment(3));
		$data['team'] = $query->result();

		$query2 = $this->db->get('team');

		$config['base_url'] ='http://localhost/jazzy/index.php/welcome/team/';
		$config['total_rows'] = $query2->num_rows();
		$config['per_page'] = 6;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] ='</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);
		$this->load->view('team',$data);
	}
	public function detail_team($id)
	{
		$data['team'] = $this->model_gsw->find_team($id);
		$this->load->view('team_detail',$data);
	}

	public function jadwal()
	{
		$this->load->library('pagination');
		$query = $this->db->get('jadwal','6',$this->uri->segment(3));
		$data['jadwal'] = $query->result();

		$query2 = $this->db->get('jadwal');

		$config['base_url'] ='http://localhost/jazzy/index.php/welcome/jadwal/';
		$config['total_rows'] = $query2->num_rows();
		$config['per_page'] = 6;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] ='</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);
		$this->load->view('jadwal',$data);
	}



}
