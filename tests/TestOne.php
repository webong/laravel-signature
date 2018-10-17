<?php
namespace Staybusy\Signature\Test;

use Staybusy\Signature\Signature;

class SignatureFunctionTest extends TestCase
{
    /**
     * Check that the multiply method returns correct result
     * @return void
     */

    public function testMultiplyReturnsCorrectValue()
    {
        $this->assertSame(Signature::multiply(4, 4), 16);
        $this->assertSame(Signature::multiply(2, 9), 18);
    }
}
