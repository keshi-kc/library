<?php
abstract class dbModel {

	protected $db;

	function __construct() {
		$this->db = DBConnection::Connect();
	}

}