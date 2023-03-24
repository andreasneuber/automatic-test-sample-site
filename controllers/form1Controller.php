<?php
namespace Controllers;

class form1Controller extends base {

	private array $data;

	public function __construct(){
		$this->data = array();
	}

	public function run(){
		$this->renderView( 'form-1' , $this->data );
	}
}
