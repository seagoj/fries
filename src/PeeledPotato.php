<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class PeeledPotato extends AbstractPeeled implements SliceableInterface
{
    /**
     * @return AbstractSliced
     */
    public function slice() : AbstractSliced
    {
        return new SlicedPotato($this);
    }
}
