<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

abstract class AbstractSalted
{
    /**
     * @param AbstractFried $fried
     */
    public function __construct(AbstractFried $fried)
    {}
}
