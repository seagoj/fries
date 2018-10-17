<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\SlicedPotato;
use Bonfyre\Kitchen\FriedPotato;
use Bonfyre\Kitchen\Fryer;
use PHPUnit\Framework\TestCase;

class FryerTest extends TestCase
{
    /**
     * @return void
     */
    public function testCanFry() : void
    {
        $fryable = $this->getMockBuilder(SlicedPotato::class)
            ->disableOriginalConstructor()
            ->getMock();
        $fryable->method('fry')->willReturn(new FriedPotato($fryable));
        $fryer = new Fryer;
        $fried = $fryer->fry($fryable);

        $this->assertInstanceOf(FriedPotato::class, $fried);
    }
}
