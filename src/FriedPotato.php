<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class FriedPotato extends AbstractFried implements SaltableInterface
{
    /**
     * @return AbstractSalted
     */
    public function salt() : AbstractSalted
    {
        return new SaltedPotato($this);
    }
}
