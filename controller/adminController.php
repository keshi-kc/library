<?php

$method=$_POST["method"];
// here $method contain the name of method to b called

class AdminController {
	
	
	public function MenuShowBook_Click() {
		
		require_once './view/book/AddBook.php';
	}
	
	public function AddBook_Click() {
				
		$obj=new Book();
		
				if( isset($_POST["book_title"]) )
					$obj->setbook_title($_POST["book_title"]);
				if( isset($_POST["author_name"]) )
					$obj->setauthor_name($_POST["author_name"]);
				if( isset($_POST["publisher_name"]) )
					$obj->setpublisher_name($_POST["publisher_name"]);
				if( isset($_POST["subject_id"]) )
					$obj->setsubject_id($_POST["subject_id"]);
				if( isset($_POST["number_of_copy"]) )
					$obj->setnumber_of_copy($_POST["number_of_copy"]);
				if( isset($_POST["main_subject_id"]) ) {
					$obj->setmain_subject_id($_POST["main_subject_id"]);
				}
				if( isset($_POST["existing_book_id"]) )	
					$obj->setexisting_book_id($_POST["existing_book_id"]);	
				if( isset($_POST["addition"]) )
				if( isset($_POST["price"]) )
				if( isset($_POST["discount"]) )
				if( isset($_POST["net_price"]) )
				if( isset($_POST["bill_detail_id"]) )
				if( isset($_POST["vendor_id"]) )
				if( isset($_POST["volume"]) )
				if( isset($_POST["date_of_purchase"]) )
				if( isset($_POST["isbn_number"]) )
				if( isset($_POST["issued_to"]) )
				if( isset($_POST["reserve_for"]) )
				if( isset($_POST["remark"]) )
				
		
		$obj->addBook($obj);
	}
	
	
	public function DeleteBook_Click() {
		// situation
			// normal one only particular book will be deleted
			// book got omited from syllabus so all copy being getining remove
				// the delete can thus now be perform by id or name
				
		$arraywhere =array();
		if( isset($_POST["book_id"]) )
			$arraywhere["book_id"]	= $_POST["book_id"];
		if( isset($_POST["id_for_copies"]) )
			$arraywhere["id_for_copies"]	= $_POST["id_for_copies"];
		if( isset($_POST["existing_book_id"]) )
			$arraywhere["existing_book_id"]	= $_POST["existing_book_id"];
		if( isset($_POST["book_title"]) )
			$arraywhere["book_title"]	= $_POST["book_title"];
		if( isset($_POST["book_id"]) )
			$arraywhere["book_id"]	= $_POST["book_id"];
		if( isset($_POST["book_id"]) )
			$arraywhere["book_id"]	= $_POST["book_id"];
		
		
		$arraywhere1= array(
				"book_id"			 => $_POST["book_id"],
				"id_for_copies"		 => $_POST["id_for_copies"],
				"existing_book_id"   => $_POST["existing_book_id"],
				"book_title"		 => $_POST["book_title"],
				"author_name" 		 => $_POST["author_name"],
				"publisher_name" 	 => $_POST["publisher_name"],
				"subject_id" 		 => $_POST["subject_id"],
				"number_of_copy" 	 => $_POST["number_of_copy"],
				"subject_id"		 => $_POST["subject_id"],
				"addition"			 => $_POST["addition"],
				"price"				 => $_POST["price"],
				"discount"			 => $_POST["discount"],
				"net_price"			 => $_POST["net_price"],
				"bill_detail_id"	 => $_POST["bill_detail_id"],
				"vendor_id"			 => $_POST["vendor_id"],
				"volume"			 => $_POST["volume"],
				"date_of_purchase"	 => $_POST["date_of_purchase"],
				"isbn_number"		 => $_POST["isbn_number"],
				"issued_to"			 => $_POST["issued_to"],
				"reserve_for"		 => $_POST["reserve_for"],
				"remark"			 => $_POST["remark"]
		);
		
		$obj=new Book();
		$obj->updateBook($arraywhere);
	}
	
	public function UpdateBook_Click() {
	
		$array= array(
				"book_id"			 => $_POST["book_id"],
				"id_for_copies"		 => $_POST["id_for_copies"],
				"existing_book_id"   => $_POST["existing_book_id"],
				"book_title"		 => $_POST["book_title"],
				"author_name" 		 => $_POST["author_name"],
				"publisher_name" 	 => $_POST["publisher_name"],
				"subject_id" 		 => $_POST["subject_id"],
				"number_of_copy" 	 => $_POST["number_of_copy"],
				"subject_id"		 => $_POST["subject_id"],
				"addition"			 => $_POST["addition"],
				"price"				 => $_POST["price"],
				"discount"			 => $_POST["discount"],
				"net_price"			 => $_POST["net_price"],
				"bill_detail_id"	 => $_POST["bill_detail_id"],
				"vendor_id"			 => $_POST["vendor_id"],
				"volume"			 => $_POST["volume"],
				"date_of_purchase"	 => $_POST["date_of_purchase"],
				"isbn_number"		 => $_POST["isbn_number"],
				"issued_to"			 => $_POST["issued_to"],
				"reserve_for"		 => $_POST["reserve_for"],
				"remark"			 => $_POST["remark"]
		);
		$obj=new Book();
		$obj->updateBook($array);
	}
	
	
	
	public function search_Click() {
	
		$array= array(
				"existing_book_id"   => $_POST["existing_book_id"],
				"book_title"		 => $_POST["book_title"],
				"author_name" 		 => $_POST["author_name"],
				"publisher_name" 	 => $_POST["publisher_name"],
				"subject_id" 		 => $_POST["subject_id"],
				"number_of_copy" 	 => $_POST["number_of_copy"],
				"subject_id"		 => $_POST["subject_id"],
				"addition"			 => $_POST["addition"],
				"price"				 => $_POST["price"],
				"discount"			 => $_POST["discount"],
				"net_price"			 => $_POST["net_price"],
				"bill_detail_id"	 => $_POST["bill_detail_id"],
				"vendor_id"			 => $_POST["vendor_id"],
				"volume"			 => $_POST["volume"],
				"date_of_purchase"	 => $_POST["date_of_purchase"],
				"isbn_number"		 => $_POST["isbn_number"],
				"issued_to"			 => $_POST["issued_to"],
				"reserve_for"		 => $_POST["reserve_for"],
				"remark"			 => $_POST["remark"]
		);
		$obj=new Book();
		$obj->addBook($array);
	}
	
	public function createReport() {
		// report class object
	}
}