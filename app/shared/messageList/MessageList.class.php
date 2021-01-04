<?php

class MessageList {

	private $msgList;

	public function __construct() {
		$this->msgList = array();
	}

	public function addItem($message) {
		$this->msgList[] = $message;
	}

	public function isEmpty() {
		return count($this->msgList) === 0;
	}
	
	public function getItems() {
		return $this->msgList;
	}
	
	public function clear() {
		$this->msgList = array();
	}
}