<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class M_emak extends CI_Model { 

public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_emak');
	}

	function randomCode(){
		return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyz', 5)), 0, 32);
	}
 
	function c_keluhan(){
			$kode = substr($this->randomCode(),0,10);
			if ($this->input->post('kel_layanan') == 1) {
				$_kel = 'Jaringan Internet';
				$_d = 'NET_'.$kode;
			} else
			if ($this->input->post('kel_layanan') == 2) {
				$_kel = 'Proyektor';
				$_d = 'PRT_'.$kode;
			} else
			if ($this->input->post('kel_layanan') == 3) {
				$_kel = 'PC';
				$_d = 'PC_'.$kode;
			}
			$_d = strtoupper($_d);

			$data = [
			'nama_pengguna'	=>	$this->input->post('nama_pengguna'),
			'kel_layanan'	=>	$_kel,
			'isi_keluhan'	=>	$this->input->post('isi_keluhan'),
			'no_tiket'		=>	$_d,
			];
			
			$this->db->insert('tbl_customer',$data);

			redirect('Welcome/konfirmasi');
		}

	function no_antri(){

		$data = [
		'title'		=>	'Halaman Konfirmasi Tiket Antri',
		'list'		=>	$this->db->get('tbl_customer')->result(),
		];


		$this->load->view('confirm',$data);
	}

	function caridata()
	{
		$c = $this->uri->segment('3');
//		
		$this->db->where('no_tiket=\''.$c.'\'');
		$query = $this->db->get('tbl_customer')->result();
       if($query==array()) { // -___- 
          print '<h1>Maaf Data yang Anda Cari Tidak ditemukan </h1>';          
          print anchor('welcome/read_kel','kembali');
          } else {
          	$data = ['tampil'=>$query];
            $this->load->view('hasil',$data); 
	  	}
 	}

 	function auth(){
 		$data['username'] = $this->input->post('username',true);
 		$data['password'] = $this->input->post('password',true);

 		if ($data['username']==""){
			$this->session->set_flashdata('errorLogin', 'Username tidak boleh kosong');
			redirect(site_url('welcome/login'));
		}else if($data['password']==""){
			$this->session->set_flashdata('errorLogin', 'Password tidak boleh kosong');
			redirect(site_url('welcome/login'));
		}else{
			$ada = $this->db->query("SELECT * FROM tbl_user WHERE username='".$data['username']."' AND password='".md5($data['password'])."'");
			if ($ada->num_rows() == 1)
			{
			        $row = $ada->row();
			        if ($row->id=="0") {
			        	$this->session->set_flashdata('errorLogin', 'Account anda sudah diblokir, silahkan daftar kembali');
						redirect(site_url('welcome/login'));
			        }
			        else{
				        $data = array(
				        	'id'=>$row->id_user,
				        	'username'=>$row->username,
				        	
				        	);
				        $this->session->set_userdata($data);
				        redirect(site_url('C_Admin'));
				    }
			}
		}
 	}

 	function getAll()
 	{
 		return $query = $this->db->get('tbl_customer')->result();
 	}

 	function getdata($id)
	{
		//select produk berdasarkan id yang dimiliki	
        $this->db->where('id', $id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("tbl_customer");
        
        return $this->db->get();
	}
	function updatedata($data, $condition)
	{
		//update produk
        $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('tbl_customer', array('status'=>$data)); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	public function delete_kel()
	{
		$id = $this->uri->segment(3);
		 $this->db->where('id',$id);

        $this->db->delete('tbl_customer');
	}
}

/* End of file M_emak.php */
/* Location: ./application/models/M_emak.php */