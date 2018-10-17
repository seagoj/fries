<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class Peeler
{
    /**
     * @param PeelableInterface $peelable
     *
     * @return AbstractPeeled
     */
    public function peel(PeelableInterface $peelable) : AbstractPeeled
    {
        return $peelable->peel();
    }
}
