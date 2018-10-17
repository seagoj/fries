<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\PeeledPotato;
use Bonfyre\Kitchen\SlicedPotato;
use Bonfyre\Kitchen\UnpeeledPotato;
use PHPUnit\Framework\TestCase;

class PeeledPotatoTest extends TestCase
{
    /**
     * @return PeeledPotato
     */
    public function testCanInstantiateObject() : PeeledPotato
    {
        $unpeeled_potato = new UnpeeledPotato;
        $peeled_potato = new PeeledPotato($unpeeled_potato);

        $this->assertInstanceOf(PeeledPotato::class, $peeled_potato);

        return $peeled_potato;
    }

    /**
     * @depends testCanInstantiateObject
     *
     * @param PeeledPotato $peeled_potato
     *
     * @return void
     */
    public function testCanSlice(PeeledPotato $peeled_potato) : void
    {
        $sliced_potato = $peeled_potato->slice();
        $this->assertInstanceOf(SlicedPotato::class, $sliced_potato);
    }
}
