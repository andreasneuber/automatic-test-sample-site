<?php
namespace Controllers;

class brownPageController extends base {

	private array $data;

	public function __construct(){
		$this->data = array();
	}

	public function run(){
		$this->renderView( 'brown-page' , $this->data );
	}
}
