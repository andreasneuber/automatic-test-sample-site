<?php
namespace Controllers;

class form2Controller extends base {

	private array $data;

	public function __construct(){
		$this->data = array();
	}

	public function run(){
		$this->renderView( 'form-2' , $this->data );
	}
}
