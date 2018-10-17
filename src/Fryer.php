<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class Fryer
{
    /**
     * @param FryableInterface $fryable
     *
     * @return AbstractFried
     */
    public function fry(FryableInterface $fryable) : AbstractFried
    {
        return $fryable->fry();
    }
}
