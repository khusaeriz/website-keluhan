<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ( !$this->session->userdata('id') && !$this->session->userdata('username')  ) {
			redirect(site_url('welcome/login'));
		}
		$this->load->model('M_emak');
	}

	function index(){
		$this->load->view('admin/index');
	}

	function ambildata(){
		$data['getdata'] = $this->M_emak->getAll();
		$this->load->view('admin/data',$data);

	}

	function edit($id){
		 $data['edit_Data'] = $this->M_emak->getdata($id); //Melakukan pemanggilan fungsi getProduct yang ada di dalam products_model untuk mendapatkan informasi / data mengenai produk berdasarkan productId yang dikirimkan
        
		 $this->load->view('admin/edit',$data);
	}

	public function update()
	{
		
        $data = $this->input->post('status');
        $condition['id'] = $this->input->post('id');
        
		$this->M_emak->updatedata($data, $condition);
		redirect('C_Admin/ambildata'); 
	}

	function delete($id){

		 $this->M_emak->delete_kel($id); //Memanggil fungsi deleteProduct yang ada pada model products_model dan mengirimkan parameter yaitu productId yang akan di delete
        
        redirect('C_Admin/ambildata'); 
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('');
	}

}