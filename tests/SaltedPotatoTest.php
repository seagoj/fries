<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\FriedPotato;
use Bonfyre\Kitchen\FryBox;
use Bonfyre\Kitchen\PeeledPotato;
use Bonfyre\Kitchen\RussetPotato;
use Bonfyre\Kitchen\SaltedPotato;
use Bonfyre\Kitchen\SlicedPotato;
use PHPUnit\Framework\TestCase;

class SaltedPotatoTest extends Testcase
{
    /**
     * @return SaltedPotato
     */
    public function testCanInstantiateObject() : SaltedPotato
    {
        $potato = new RussetPotato;
        $peeled_potato = new PeeledPotato($potato);
        $sliced_potato = new SlicedPotato($peeled_potato);
        $fried_potato = new FriedPotato($sliced_potato);
        $salted_potato = new SaltedPotato($fried_potato);

        $this->assertInstanceOf(SaltedPotato::class, $salted_potato);

        return $salted_potato;
    }

    /**
     * @depends testCanInstantiateObject
     *
     * @param SaltedPotato $salted_potato
     *
     * @return void
     */
    public function testCanBox(SaltedPotato $salted_potato) : void
    {
        $fry_box = $salted_potato->box();

        $this->assertInstanceOf(FryBox::class, $fry_box);
    }
}
