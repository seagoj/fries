<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

abstract class AbstractSliced
{
    /**
     * @param AbstractPeeled $peeled
     */
    public function __construct(AbstractPeeled $peeled)
    {}
}
