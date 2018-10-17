<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

abstract class AbstractBoxed
{
    /**
     * @param AbstractSalted $salted
     */
    public function __construct(AbstractSalted $salted)
    {}
}
