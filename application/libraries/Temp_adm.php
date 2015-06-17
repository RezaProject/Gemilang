<?php 
/**
* 
*/
class Temp_adm
{
	protected $_ci;
	function __construct()
	{
		$this->_ci =&get_instance();
	}
	function display($template,$data=null)
	{
		$data['_content']=$this->_ci->load->view($template,$data, true);
		$data['_header']=$this->_ci->load->view('admin/_header',$data, true);
		$this->_ci->load->view('/admin/all',$data);
	}
}
?>