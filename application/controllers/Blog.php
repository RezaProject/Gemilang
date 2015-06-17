<?php 
defined('BASEPATH') OR exit("Access Denied");
class Blog extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('m_gemilang');
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->helper('permalink_helper');
	}

function index($id=null)
	{
		$jml = $this->db->get('artikel');
		//Pengaturan

		$config['base_url']   = base_url().'blog/index';
		$config['total_rows'] = $jml->num_rows();
		$config['per_page']   = '5';
		//$config['first_page'] = 'Awal';
		//$config['last_page']  = 'Akhir';
		//$config['next_page']  = '«';
		//$config['prev_page']  = '»';
		//inisialasi config
		$this->pagination->initialize($config);
		//
		$data['let'] = "blog";
		$data['halaman'] = $this->pagination->create_links();
		$data['title'] = 1;
		$data['read'] = 0;
		$data['pag'] = 0;
		$data['isi'] = $this->m_gemilang->artikel($config['per_page'],$id);
		$data['sidebar'] = $this->m_gemilang->sidebar('5');
		$this->template->display('backend/primary',$data);
	}
function page($jud=null)
	{
		if($jud != null){
			if($this->uri->segment(3) === FALSE){
				$isi = "";
			}
			else{
				$isi = $this->uri->segment(3);
			}
			$data['let'] = "blog";
			$data['read'] = 1;
			$data['sidebar'] = $this->m_gemilang->sidebar('5');
			$data['isi'] = $this->m_gemilang->page($isi);
			$data['title'] = 1;
			$data['pag'] = 1;
			if($data['isi'] == null){
				redirect(base_url());
			}
			else{
				$this->template->display('backend/primary',$data);
			}
		}
	}
function contact(){
	$data['let'] = "contact";
	$data['read'] = 1;
	$data['isi'] = "aa";
	$data['title'] = 1;
	$data['pag'] = 0;
	$this->template->display('backend/primary',$data);
}
function direct($data){
	redirect($data);
}
function read($jud)
	{
		if($jud !=null){
			if($this->uri->segment(3) === FALSE){
				$isi = "";
			}
			else {
				$isi = $this->uri->segment(3);
			}
			$data['let'] = "blog";
			$data['read'] = 1;
			$data['pag'] = 1;
			$data['sidebar'] = $this->m_gemilang->sidebar('5');
			$data['isi'] = $this->m_gemilang->read($isi);
			$data['title'] = 1;
			if($data['isi'] == null){
				redirect(base_url());
			}
			else{
				$this->template->display('backend/primary',$data);
			}
		}
		else{
			redirect(base_url());
		}
	}
function users()
	{
		if($this->uri->segment(3) === FALSE){
			redirect(base_url());
		}
		else{
			$isi = $this->uri->segment(3);
		}
		$data['let'] = "blog";
		$data['read'] = 1;
		$data['pag'] = 1;
		$data['sidebar'] = $this->m_gemilang->sidebar('5');
		$data['isi'] = $this->m_gemilang->users($isi);
		$data['title'] = 2;
		if($data['isi'] == null){
			redirect(base_url());
		}
		else{
			$this->template->display('backend/primary',$data);
		}
	}
/**
  *function search()
	*{
	*	if($this->uri->segment(3) === FALSE){
	*		$isi = "";
	*	}
	*	else{
	*		$isi = $this->uri->segment(3);
	*	}
	*	$limit = 10;
	*	$data['kata'] 
	*	$data['isi'] = $this->m_gemilang->search($isi);
*
*
*	}
*/
}
