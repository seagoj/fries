<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

interface FryableInterface
{
    public function fry() : AbstractFried;
}
