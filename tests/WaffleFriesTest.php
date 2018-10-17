<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\WaffleFries;
use Bonfyre\Kitchen\FryBox;
use Bonfyre\Kitchen\RussetPotato;
use PHPUnit\Framework\TestCase;

class WaffleFriesTest extends TestCase
{
    /**
     * @return WaffleFries
     */
    public function testCanInstantiateObject() : WaffleFries
    {
        $potato = new RussetPotato;
        $fries = new WaffleFries($potato);

        $this->assertInstanceOf(WaffleFries::class, $fries);

        return $fries;
    }

    /**
     * @depends testCanInstantiateObject
     *
     * @param Fries $fries
     *
     * @return void
     */
    public function testCanMakeFries(WaffleFries $fries) : void
    {
        $order_of_fries = $fries->make();

        $this->assertInstanceOf(FryBox::class, $order_of_fries);
    }
}
