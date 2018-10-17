<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\FriedPotato;
use Bonfyre\Kitchen\SaltedPotato;
use Bonfyre\Kitchen\Salter;
use PHPUnit\Framework\TestCase;

class SalterTest extends TestCase
{
    /**
     * @return void
     */
    public function testCanSalt() : void
    {
        $saltable = $this->getMockBuilder(FriedPotato::class)
            ->disableOriginalConstructor()
            ->getMock();
        $saltable->method('salt')->willReturn(new SaltedPotato($saltable));
        $salter = new Salter;
        $salted = $salter->salt($saltable);

        $this->assertInstanceOf(SaltedPotato::class, $salted);
    }
}
