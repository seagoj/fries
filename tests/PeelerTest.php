<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\UnpeeledPotato;
use Bonfyre\Kitchen\PeeledPotato;
use Bonfyre\Kitchen\Peeler;
use PHPUnit\Framework\TestCase;

class PeelerTest extends TestCase
{
    public function testCanPeel() : void
    {
        $peelable = $this->getMockBuilder(UnpeeledPotato::class)
            ->disableOriginalConstructor()
            ->getMock();
        $peelable->method('peel')->willReturn(new PeeledPotato($peelable));
        $peeler = new Peeler;
        $peeled = $peeler->peel($peelable);

        $this->assertInstanceOf(PeeledPotato::class, $peeled);
    }
}
