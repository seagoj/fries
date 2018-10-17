<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class UnpeeledPotato extends Potato implements PeelableInterface
{
    /**
     * @return AbstractPeeled
     */
    public function peel() : AbstractPeeled
    {
        return new PeeledPotato($this);
    }
}
