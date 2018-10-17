<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class SaltedPotato extends AbstractSalted implements BoxableInterface
{
    /**
     * @return FryBox
     */
    public function box() : AbstractBoxed
    {
        return new FryBox($this);
    }
}
