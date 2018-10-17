<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\FriedPotato;
use Bonfyre\Kitchen\FryBox;
use Bonfyre\Kitchen\PeeledPotato;
use Bonfyre\Kitchen\RussetPotato;
use Bonfyre\Kitchen\SaltedPotato;
use Bonfyre\Kitchen\SlicedPotato;
use PHPUnit\Framework\TestCase;

class FryBoxTest extends TestCase
{
    /**
     * @return void
     */
    public function testCanInstantiateObject() : void
    {
        $potato = new RussetPotato;
        $peeled_potato = new PeeledPotato($potato);
        $sliced_potato = new SlicedPotato($peeled_potato);
        $fried_potato = new FriedPotato($sliced_potato);
        $salted_potato = new SaltedPotato($fried_potato);
        $fry_box = new FryBox($salted_potato);

        $this->assertInstanceOf(FryBox::class, $fry_box);
    }
}
