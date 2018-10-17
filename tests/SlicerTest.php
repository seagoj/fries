<?php declare(strict_types=1);

namespace Bonfyre\Kitchen\Tests;

use Bonfyre\Kitchen\PeeledPotato;
use Bonfyre\Kitchen\SlicedPotato;
use Bonfyre\Kitchen\Slicer;
use PHPUnit\Framework\TestCase;

class SlicerTest extends TestCase
{
    /**
     * @return void
     */
    public function testCanSlice() : void
    {
        $sliceable = $this->getMockBuilder(PeeledPotato::class)
            ->disableOriginalConstructor()
            ->getMock();
        $sliceable->method('slice')->willReturn(new SlicedPotato($sliceable));
        $slicer = new Slicer;
        $sliced = $slicer->slice($sliceable);

        $this->assertInstanceOf(SlicedPotato::class, $sliced);
    }
}
