<?php 
/**
* 
*/
class M_gemilang extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function home(){
		$query = $this->db->get('home');
		return $query->result();

	}
	function artikel($num,$offset){
		$this->db->order_by("date",'ASC');
		$data = $this->db->get('artikel',$num,$offset);
		return $data->result();
	}
	function page($jud){
		$this->db->where('uri',$jud);
		$query = $this->db->get('page');
		return $query->result();
	}
	function read($jud){
		$this->db->where('uri',$jud);
		$query = $this->db->get('artikel');
		return $query->result();
	}
	function users($jud){
		$this->db->where('uri',$jud);
		$query = $this->db->get('users');
		return $query->result();
	}
	function sidebar($isi){
		$query = $this->db->order_by("date","ASC");
		$data = $this->db->get('artikel',$isi);
		return $data->result();
	}
}
 ?>