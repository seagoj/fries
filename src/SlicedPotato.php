<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class SlicedPotato extends AbstractSliced implements FryableInterface
{
    /**
     * @return FriedPotato
     */
    public function fry() : AbstractFried
    {
        return new FriedPotato($this);
    }
}
