<?php 
defined('BASEPATH') or exit("Access Denied");
/**
* 
*/
class Adm extends CI_Controller
{
	var $gallery_path;
	var $gallery_path_url;
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_adm');
		$this->load->library(array('table','form_validation','temp_adm'));
		$this->load->helper(array("url","text","permalink_helper","form","security"));
		$this->gallery_path = realpath(APPPATH.'../asset/images');
		$this->gallery_path_url = base_url()."asset/images";
	}
	function index()
	{
		if($this->session->userdata('log_in')){
			$data['_title']     = "Dashboard";
			$data['sub_title']  = "Statistics Website";
			$session_data       = $this->session->userdata('log_in');
			$data['username']   = $session_data['username'];
			$data['fullname']   = $session_data['fullname'];
			$data['permission'] = $session_data['permission'];
			$data['id']         = $session_data['id'];
			$this->temp_adm->display('admin/page/dashboard',$data);
		}
		else{
			redirect('adm/login');
		}
	}
	function login(){
		if($this->session->userdata('log_in')){
			redirect('adm');
		}
		else{
			$this->load->helper('form');
			$this->load->view('admin/login');
		}
	}
	function logout(){
		$this->session->unset_userdata('log_in');
   		session_destroy();
   		redirect('adm/index');
	}
	function cek(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
   		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_db_check');
   		if($this->form_validation->run() == FALSE)
   			{
     			//Jika validasi gagal user akan diarahkan kembali ke halaman login
     			$this->load->view('admin/login');
   			}
   		else
   			{
     			//Jika berhasil user akan di arahkan ke private area 
     			redirect('adm/index', 'refresh');
   			}
	}
	function db_check($password){
		$username = $this->input->post('username',TRUE);
		$result = $this->m_adm->login($username,$password);
		$session_ar = array();
		if($result){
			foreach ($result as $r) {
				$session_ar = 
					array(
						"username"   =>$r->username,
						"id"         =>$r->id_users,
						"fullname"   =>$r->fullname,
						"permission" =>$r->permission,
						"date"       =>$r->date,
						"uri"        =>$r->uri,
						"email"      =>$r->email,
						"desc"       =>$r->desc,
						"referer"    =>$r->referer
						);
				$this->session->set_userdata('log_in',$session_ar);
			}
			return TRUE;
		}
		else{
			$this->form_validation->set_message('check database','Invalid username or password');
			return FALSE;
		}
	}
	function new_article(){
		if($this->session->userdata('log_in')){
			$this->_new_article_rules();
			if($this->form_validation->run() === FALSE){
				$data['_title']     = "New Article";
				$data['sub_title']  = "Create New Article";
				$session_data       = $this->session->userdata('log_in');
				$data['username']   = $session_data['username'];
				$data['fullname']   = $session_data['fullname'];
				$data['permission'] = $session_data['permission'];
				$data['id']         = $session_data['id'];
				$this->temp_adm->display('admin/page/article',$data);
			}
			else {
				$isi = array(
						"id_artikel"		 =>"",
						"judul"      =>$this->input->post('judul',TRUE),
						"isi"        =>$this->input->post('isi',TRUE),
						"uri"        =>$this->input->post('uri',TRUE),
						"author"     =>$this->input->post('author',TRUE),
						"author_uri" =>$this->input->post('uri_us',TRUE),
						"date"       =>date("d-m-y")
					);
				$id = $this->m_adm->post_isi($isi,'artikel');
				redirect("adm/list_article/success");
			}
		}
		else{
			redirect('adm/login');
		}
	}
	function _new_article_rules(){
		$this->form_validation->set_rules('judul','Judul','required|trim');
		$this->form_validation->set_rules('isi','Isi','required|trim');
		$this->form_validation->set_rules('uri','URI','required|trim');
		$this->form_validation->set_rules('author','Author','required|trim');
		$this->form_validation->set_rules('uri_us','URL Author','required|trim');
	}
	function list_article(){
		if($this->session->userdata('log_in')){
			if($this->uri->segment(3) === TRUE){
				$data['alert'] = $this->uri->segment(3);
			}
			else{
				$data['alert'] = "";
			}
			$data['_title']     = "List Article";
			$data['sub_title']  = "List All Article";
			$session_data       = $this->session->userdata('log_in');
			$data['username']   = $session_data['username'];
			$data['fullname']   = $session_data['fullname'];
			$data['permission'] = $session_data['permission'];
			$data['id']         = $session_data['id'];
			$data['isi'] = $this->m_adm->list_r("artikel");
			$this->temp_adm->display('admin/page/list_article',$data);
		}
		else{
			redirect('adm/login');
		}
	}
	function new_page(){

		if($this->session->userdata('log_in')){
			$data['_title']     = "New Page";
			$data['sub_title']  = "Create New Page";
			$session_data       = $this->session->userdata('log_in');
			$data['username']   = $session_data['username'];
			$data['fullname']   = $session_data['fullname'];
			$data['permission'] = $session_data['permission'];
			$data['id']         = $session_data['id'];
			$this->temp_adm->display('admin/page/page',$data);
		}
		else{
			redirect('adm/login');
		}
	}
	function list_page(){
		if($this->session->userdata('log_in')){
			$data['_title']     = "List Page";
			$data['sub_title']  = "List All Page";
			$session_data       = $this->session->userdata('log_in');
			$data['username']   = $session_data['username'];
			$data['fullname']   = $session_data['fullname'];
			$data['permission'] = $session_data['permission'];
			$data['id']         = $session_data['id'];
			$data['isi'] = $this->m_adm->list_r("page");
			$this->temp_adm->display('admin/page/list_page',$data);
		}
		else{
			redirect('adm/login');
		}
	}
	function home_page(){
		if($this->session->userdata('log_in')){
			$data['_title']     = "Home Page";
			$data['sub_title']  = "Home Page Settings";
			$session_data       = $this->session->userdata('log_in');
			$data['username']   = $session_data['username'];
			$data['fullname']   = $session_data['fullname'];
			$data['permission'] = $session_data['permission'];
			$data['id']         = $session_data['id'];
			$data['isi'] = $this->m_adm->list_r("home");
			$this->temp_adm->display('admin/page/home_page',$data);
		}
		else{
			redirect('adm/login');
		}
	}
	function about_page(){
		if($this->session->userdata('log_in')){
			$data['_title']     = "About Page";
			$data['sub_title']  = "About Page Settings";
			$session_data       = $this->session->userdata('log_in');
			$data['username']   = $session_data['username'];
			$data['fullname']   = $session_data['fullname'];
			$data['permission'] = $session_data['permission'];
			$data['id']         = $session_data['id'];
			$data['isi'] = $this->m_adm->list_r("about");
			$this->temp_adm->display('admin/page/about_page',$data);
		}
		else{
			redirect('adm/login');
		}
	}
	function peserta(){
		if($this->session->userdata('log_in')){
			$data['_title']     = "Peserta";
			$data['sub_title']  = "Peserta Yang Sudah Mendaftar";
			$session_data       = $this->session->userdata('log_in');
			$data['username']   = $session_data['username'];
			$data['fullname']   = $session_data['fullname'];
			$data['permission'] = $session_data['permission'];
			$data['id']         = $session_data['id'];
			$data['isi'] = $this->m_adm->list_r("user_reg");
			$this->temp_adm->display('admin/page/peserta',$data);
		}
		else{
			redirect('adm/login');
		}
	}
	function account_settings(){
		if($this->session->userdata('log_in')){
			$data['_title']     = "Account Settings";
			$data['sub_title']  = "Change Data Account";
			$session_data       = $this->session->userdata('log_in');
			$data['username']   = $session_data['username'];
			$data['fullname']   = $session_data['fullname'];
			$data['permission'] = $session_data['permission'];
			$data['id']         = $session_data['id'];
			$data['email']      = $session_data['email'];
			$data['uri']        = $session_data['uri'];
			$data['desc']       = $session_data['desc'];
			$data['referer']    = $session_data['referer'];
			$this->temp_adm->display('admin/page/set_account',$data);
		}
		else{
			redirect('adm/login');
		}
	}
	function manager(){
		if($this->session->userdata['log_in']){
			//if($session_data['permission'] == 10){
				$data['_title']     = "File Manager";
				$data['sub_title']  = "Create,Read,Update,Delete File data";
				$session_data       = $this->session->userdata('log_in');
				$data['username']   = $session_data['username'];
				$data['fullname']   = $session_data['fullname'];
				$data['permission'] = $session_data['permission'];
				$data['id']         = $session_data['id'];
				$data['email']      = $session_data['email'];
				$data['uri']        = $session_data['uri'];
				$data['desc']       = $session_data['desc'];
				$data['referer']    = $session_data['referer'];
				$this->temp_adm->display('admin/page/manager',$data);
			//}
			//else{
			//	redirect("adm/index");
			//}
		}
		else{
			redirect("adm/index");
		}
	}
	function admin_list(){
		$data['_title']     = "Admin List";
		$data['sub_title']  = "All Super Admin List";
		$session_data       = $this->session->userdata('log_in');
		$data['username']   = $session_data['username'];
		$data['fullname']   = $session_data['fullname'];
		$data['permission'] = $session_data['permission'];
		$data['id']         = $session_data['id'];
		$data['email']      = $session_data['email'];
		$data['uri']        = $session_data['uri'];
		$data['desc']       = $session_data['desc'];
		$data['referer']    = $session_data['referer'];
		$data['isi']		= $this->m_adm->list_r('users');
		$this->temp_adm->display('admin/page/adm_list',$data);
	}
	function create_admin(){
		$data['_title']		= "New Account";
		$data['sub_title']	= "Create New Account";
		$session_data       = $this->session->userdata('log_in');
		$data['username']   = $session_data['username'];
		$data['fullname']   = $session_data['fullname'];
		$data['permission'] = $session_data['permission'];
		$data['id']         = $session_data['id'];
		$data['email']      = $session_data['email'];
		$data['uri']        = $session_data['uri'];
		$data['desc']       = $session_data['desc'];
		$data['referer']    = $session_data['referer'];
		$data['isi']		= $this->m_adm->list_r('users');
		$this->temp_adm->display('admin/page/create_ac',$data);
	}
}
 ?>