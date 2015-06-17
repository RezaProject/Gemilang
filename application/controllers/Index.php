<?php 
defined('BASEPATH') or exit("Access Denied");
/**
* 
*/
class Index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_gemilang');
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->helper('permalink_helper');
	}
	function index(){
		$data['let'] = "home";
		$data['isi'] = $this->m_gemilang->home();
		$data['title'] = 0;
		$data['pag'] = 0;
		$this->template->display('backend/home/welcome',$data);
	}
}
 ?>