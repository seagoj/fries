<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\FriedPotato;
use Bonfyre\Kitchen\PeeledPotato;
use Bonfyre\Kitchen\RussetPotato;
use Bonfyre\Kitchen\SaltedPotato;
use Bonfyre\Kitchen\SlicedPotato;
use PHPUnit\Framework\TestCase;

class FriedPotatoTest extends TestCase
{
    /**
     * @return FriedPotato
     */
    public function testCanInstantiateObject() : FriedPotato
    {
        $potato = new RussetPotato;
        $peeled_potato = new PeeledPotato($potato);
        $sliced_potato = new SlicedPotato($peeled_potato);
        $fried_potato = new FriedPotato($sliced_potato);

        $this->assertInstanceOf(FriedPotato::class, $fried_potato);

        return $fried_potato;
    }

    /**
     * @depends testCanInstantiateObject
     *
     * @param FriedPotato $fried_potato
     *
     * @return void
     */
    public function testCanSalt(FriedPotato $fried_potato) : void
    {
        $salted_potato = $fried_potato->salt();

        $this->assertInstanceOf(SaltedPotato::class, $salted_potato);
    }
}
