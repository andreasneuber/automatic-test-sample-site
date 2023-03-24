<?php
namespace Controllers;

class childWindowController extends base {

	private array $data;

	public function __construct(){
		$this->data = array();
	}

	public function run(){
		$this->renderView( 'child-window' , $this->data );
	}
}
