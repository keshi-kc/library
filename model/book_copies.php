<?php

class BookCopies extends dbModel {
	
	private $existing_book_id;
	private $addition;
	private $price;
	private $discount;
	private $net_price;
	private $bill_detail_id;
	private $vendor_id;
	private $volume;
	private $date_of_purchase;
	private $isbn_number;
	private $issued_to;
	private $reserve_for;
	private $remark;
	private $tableName="book_copies";
	
	public function setexisting_book_id($value) {
	
		$this->existing_book_id=$value;
	}
	public function setprice($value) {
	
		$this->price=$value;
	}
	public function setnet_price($value) {
	
		$this->net_price=$value;
	}
	public function setbill_detail_id($value) {
	
		$this->bill_detail_id=$value;
	}
	public function setvendor_id($value) {
	
		$this->vendor_id=$value;
	}
	public function setvolume($value) {
	
		$this->volume=$value;
	}
	public function setdate_of_purchase($value) {
	
		$this->date_of_purchase=$value;
	}
	public function setisbn_number($value) {
	
		$this->isbn_number=$value;
	}
	public function setissued_to($value) {
	
		$this->issued_tos=$value;
	}
	public function setreserve_for($value) {
	
		$this->reserve_for=$value;
	}
	public function setremark($value) {
	
		$this->remark=$value;
	}

	
	public function getexisting_book_id() {
	
		return $this->existing_book_id;
	}
	public function getprice() {
	
		return $this->price;
	}
	public function getnet_price() {
	
		return $this->net_price;
	}
	public function getbill_detail_id() {
	
		$this->bill_detail_id;
	}
	public function getvendor_id() {
	
		return $this->vendor_id;
	}
	public function getvolume() {
	
		return $this->volume;
	}
	public function getdate_of_purchase() {
	
		return $this->date_of_purchase;
	}
	public function getisbn_number() {
	
		return $this->isbn_number;
	}
	public function getissued_to() {
	
		return $this->issued_tos;
	}
	public function getreserve_for() {
	
		return $this->reserve_for;
	}
	public function getremark() {
	
		return $this->remark;
	}
}