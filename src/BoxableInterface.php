<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

interface BoxableInterface
{
    public function box() : AbstractBoxed;
}
