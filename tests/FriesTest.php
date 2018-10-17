<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\Fries;
use Bonfyre\Kitchen\FryBox;
use Bonfyre\Kitchen\RussetPotato;
use PHPUnit\Framework\TestCase;

class FriesTest extends TestCase
{
    /**
     * @return Fries
     */
    public function testCanInstantiateObject() : Fries
    {
        $potato = new RussetPotato;
        $fries = new Fries($potato);

        $this->assertInstanceOf(Fries::class, $fries);

        return $fries;
    }

    /**
     * @depends testCanInstantiateObject
     *
     * @param Fries $fries
     *
     * @return void
     */
    public function testCanMakeFries(Fries $fries) : void
    {
        $order_of_fries = $fries->make();

        $this->assertInstanceOf(FryBox::class, $order_of_fries);
    }
}
