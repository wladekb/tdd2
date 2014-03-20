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

	/** @test */
	public function shouldReturnPriceOfB() {
		$checkout = new Checkout();
		$total = $checkout->sum('B');
		$this->assertEquals(10,$total);
	}

	/** @test */
	public function shouldCallProductRepo() {
		$product = new Product('C',30);

		$repoMock = $this->getMock('ProductRepo',array('get'));
		$repoMock->expects($this->once())
			->method('get')
			->with('C')
			->will($this->returnValue($product));

		$checkout = new Checkout($repoMock);
		$total = $checkout->sum('C');
	}
}
 