<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\SaltedPotato;
use Bonfyre\Kitchen\FryBox;
use Bonfyre\Kitchen\Boxer;
use PHPUnit\Framework\TestCase;

class BoxerTest extends TestCase
{
    public function testCanBox() : void
    {
        $boxable = $this->getMockBuilder(SaltedPotato::class)
            ->disableOriginalConstructor()
            ->getMock();
        $boxable->method('box')->willReturn(new FryBox($boxable));
        $boxer = new Boxer;
        $boxed = $boxer->box($boxable);

        $this->assertInstanceOf(FryBox::class, $boxed);
    }
}
