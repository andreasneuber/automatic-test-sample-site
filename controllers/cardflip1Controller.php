<?php
namespace Controllers;

class cardflip1Controller extends base {

	private array $data;

	public function __construct(){
		$this->data = array();
	}

	public function run(){
		$this->renderView( 'card-flip-1' , $this->data );
	}
}
