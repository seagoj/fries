<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

interface PeelableInterface
{
    public function peel() : AbstractPeeled;
}
