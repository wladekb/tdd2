<?php

class Checkout {

	/** @var ProductRepo */
	private $productRepo;
    private $total = 0;

	public function __construct( ProductRepo $productRepo = null ) {
		$this->productRepo = $productRepo;
	}

	public function sum( $product ) {
		$price = 40;
		if ( $product == 'B' ) {
			$price = 10;
		} else if ( $product != 'A' ) {
			$price = $this->productRepo->get($product)->getPrice();
		}
		return $this->total += $price;
	}

} 