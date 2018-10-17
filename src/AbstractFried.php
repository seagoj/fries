<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

abstract class AbstractFried
{
    /**
     * @param AbstractSliced $sliced
     */
    public function __construct(AbstractSliced $sliced)
    {}
}
