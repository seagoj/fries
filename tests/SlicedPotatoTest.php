<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\RussetPotato;
use Bonfyre\Kitchen\PeeledPotato;
use Bonfyre\Kitchen\SlicedPotato;
use Bonfyre\Kitchen\FriedPotato;
use PHPUnit\Framework\TestCase;

class SlicedPotatoTest extends TestCase
{
    /**
     * @return SlicedPotato
     */
    public function testCanInstantiateObject() : SlicedPotato
    {
        $potato = new RussetPotato;
        $peeled_potato = new PeeledPotato($potato);
        $sliced_potato = new SlicedPotato($peeled_potato);

        $this->assertInstanceOf(SlicedPotato::class, $sliced_potato);

        return $sliced_potato;
    }

    /**
     * @depends testCanInstantiateObject
     *
     * @param SlicedPotato $sliced_potato
     *
     * @return void
     */
    public function testCanFry(SlicedPotato $sliced_potato) : void
    {
        $fried_potato = $sliced_potato->fry();

        $this->assertInstanceOf(FriedPotato::class, $fried_potato);
    }
}
