<?php



class Book extends dbModel {
	
	
	private $book_title;
	private $author_name;
	private $publisher_name;
	private $subject_id;
	private $number_of_copy;
	private $main_subject_id;
	private $tableName="book";
	
	private $VendorObj;
	private $MainSubjectObj;
	
	public function __construct() {
		$this->VendorObj = new Vendor();
		$this->MainSubjectObj = new MainSubject();
	}
	
	//getteres start
	
	public function setbook_title($value) {

		$this->book_title=$value;
	}
	public function setauthor_name($value) {

		$this->author_name=$value;
	}
	public function setpublisher_name($value) {
	
		$this->publisher_name=$value;
	}
	public function setsubject_id($value) {
	
		$this->subject_id=$value;
	}
	public function setnumber_of_copy($value) {
	
		$this->number_of_copy=$value;
	}
	public function setmain_subject_id($value) {
		
		$this->main_subject_id=$value;
	}
	
	
	//getteres stop
	//setteres start
	
	public function getbook_title() {
	
		return $this->book_title;
	}
	public function getauthor_name() {
	
		return $this->author_name;
	}
	public function getpublisher_name() {
	
		return $this->publisher_name;
	}
	public function getsubject_id() {
	
		return $this->subject_id;
	}
	public function getnumber_of_copy() {
	
		return $this->number_of_copy;
	}
	public function getmain_subject_id() {
	
		return $this->main_subject_id;
	}
	
	
	//setteres stop
	
	public function addBook($obj) {
		
		try {
			$values=(array)$this;
			$this->db->startTransaction();
			$this->db->Fields($values)->From($this->tableName)->Insert();
			$this->db->Fields($values)->From($this->tableBook_Copies)->Insert();
			$this->db->commit();
			
		}
		catch (Exception $e) {
			$this->db->rollback();
		}
		
	}
	
	public function updateBook($array) {
	
		try {
				
			$this->db->startTransaction();
			$this->db->Fields($array)->Update();
			// call select query
				
		}
		catch (Exception $e) {
			$this->db->rollback();
		}
	
	}
	
	public function deleteBook($array) {
		
		
	
	}
	
	public function searchBook($array) {
		
		$this->db->Select();
	}
	
	public function reserveBook() {
		
	}
	
	public function issueBook() {
		
	}
	
	public function returnBook() {
		
	}
	
}