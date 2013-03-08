<?php
abstract class mainModel {
	protected $db;
	
	function __construct() {
		$this->db=DBConnection::Connect();	
	}
	
	
}