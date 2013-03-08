<?php 
require_once('singleton.php');

abstract class model{
	protected $db;
	
	public function model() {
		$this->db = DBConnection::Connect();
	}
}

class mymodel extends model {
	
	public $arr=array();
	
	public function displayReport($fieldArray=array(),$where=array()) {
		//echo"<br/>";
		//print_r($fieldArray); die(" in model");
		$this->db->Fields($fieldArray);
		//echo"here i m "; die;
		$this->db->From("table1 as a");
		$this->db->Where($where);
		$this->db->Join("table2 as b" ," ");
		//$this->db->Where($where,false,"and","LIKE");
		
		//echo '<pre>';
		//print_r($where);
		//die;
		
		
// 		foreach($where as $key=>$val) {
// 			$this->db->like($key,$val);
// 		}

		
		$this->db->Select();
	}
	
}

?>