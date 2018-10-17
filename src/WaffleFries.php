<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class WaffleFries extends Fries
{
    /**
     * @return Slicer
     */
    protected function slicer() : Slicer
    {
        return new WaffleSlicer;
    }
}
