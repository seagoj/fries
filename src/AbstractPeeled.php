<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

abstract class AbstractPeeled
{
    /**
     * @param Unpeeled $unpeeled
     */
    public function __construct(AbstractUnpeeled $unpeeled)
    {}
}
