<?php

require_once "autoload.php";

class CheckoutTest extends PHPUnit_Framework_TestCase {

	/** @test */
	public function shouldReturnPriceOfA() {
		$checkout = new Checkout();
		$total = $checkout->sum('A');
		$this->assertEquals(40,$total);
	}

    /** @test */
    public function shouldReturnSum() {
        $checkout = new Checkout();
        $total = $checkout->sum('A');
        $total = $checkout->sum('A');

        $this->assertEquals(80,$total);
    }
}
 