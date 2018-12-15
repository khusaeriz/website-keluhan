<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_emak');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function keluhan()
	{
		$this->load->view('keluhan');
	}

	function log_kel()
	{
		$this->M_emak->c_keluhan();
		//redirect('Welcome/konfirmasi');
	}

	function konfirmasi()
	{
		$this->M_emak->no_antri();
	}
	function read_kel()
	{
		$data['title'] = "Halaman Pencarian Keluhan";
		$this->load->view('read',$data);
	}

	function cari() 
	{
		if ($this->input->post('cari')) {
			echo 'Wait ...<script>setTimeout(function(){
				document.location=\''.site_url('welcome/cari/'.$this->input->post('cari')).'\';
			}, 1000);</script>';
			exit();
		}
	   $data['title'] = "Halaman Hasil Pencarian Keluhan";
       $data['tampil']=$this->M_emak->caridata();
	}

	function login()
	{
		$this->load->view('login');
		
	}

	function auth()
	{
		$this->M_emak->auth();
	}
}
