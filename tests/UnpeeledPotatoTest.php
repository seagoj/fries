<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\PeeledPotato;
use Bonfyre\Kitchen\UnpeeledPotato;
use PHPUnit\Framework\TestCase;

class UnpeeledPotatoTest extends TestCase
{
    /**
     * @return UnpeeledPotato
     */
    public function testCanInstantiateObject() : UnpeeledPotato
    {
        $unpeeled_potato = new UnpeeledPotato;

        $this->assertInstanceOf(UnpeeledPotato::class, $unpeeled_potato);

        return $unpeeled_potato;
    }

    /**
     * @depends testCanInstantiateObject
     *
     * @param UnpeeledPotato $unpeeled_potato
     *
     * @return void
     */
    public function testCanPeel(UnpeeledPotato $unpeeled_potato) : void
    {
        $peeled_potato = $unpeeled_potato->peel();
        $this->assertInstanceOf(PeeledPotato::class, $peeled_potato);
    }
}
