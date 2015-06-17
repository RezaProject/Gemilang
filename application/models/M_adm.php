<?php 
/**
* 
*/
class M_adm extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function home(){
		
	}
	function login($username,$password){
		$this -> db -> select('*');
   		$this -> db -> from('users');
   		$this -> db -> where('username', $username);
   		$this -> db -> where('password', MD5($password));
   		$this -> db -> limit(1);

   		$query = $this -> db -> get();

   		if($query -> num_rows() == 1)
   		{
     		return $query->result();
   		}
   		else
   		{
     		return false;
   		}
 	}
  function list_r($isi){
    $query = $this->db->get($isi);
    return $query->result();
  }
  function post_isi($isi,$tempat){
    $this->db->set($isi);
    $this->db->insert($tempat);
    return $this->db->insert_id();
  }
}
 ?>