<?php

namespace Controllers;

use Nekman\LuhnAlgorithm\Contract\LuhnAlgorithmExceptionInterface;
use Nekman\LuhnAlgorithm\LuhnAlgorithmFactory;
use Nekman\LuhnAlgorithm\Number;

class responseccController extends base {

	private array $data;

	public function __construct() {
		$this->data = array();
	}

	public function getData() {
		$results                       = print_r( $_POST, true );
		$this->data['results_print_r'] = $results;
		$this->data['cardnumber']      = trim( $_POST['cardnumber'] );
	}

	/**
	 * @throws LuhnAlgorithmExceptionInterface
	 */
	public function luhnCheck(): void {
		$luhn   = LuhnAlgorithmFactory::create();
		$number = Number::fromString( $this->data['cardnumber'] );

		$this->data['luhncheck'] = false;

		if ( $luhn->isValid( $number ) ) {
			$this->data['luhncheck'] = true;
		}
	}

	public function run() {
		$this->getData();
		$this->luhnCheck();
		$this->renderView( 'response-cc', $this->data );
	}
}
