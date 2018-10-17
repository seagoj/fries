<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

use Bonfyre\Base;


class Salter
{
    /**
     * @param SaltableInterface $saltable
     *
     * @return AbstractSalted
     */
    public function salt(SaltableInterface $saltable) : AbstractSalted
    {
        return $saltable->salt();
    }
}
