<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

abstract class Potato extends AbstractUnpeeled
{
    /**
     * @param string $property
     *
     * @return mixed
     */
    public function __get(string $property)
    {
        return $this->$property;
    }
}
