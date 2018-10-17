<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

interface SaltableInterface
{
    public function salt() : AbstractSalted;
}
