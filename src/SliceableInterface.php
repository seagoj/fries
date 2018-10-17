<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

interface SliceableInterface
{
    public function slice() : AbstractSliced;
}
