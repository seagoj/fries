<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class Slicer
{
    /**
     * @param SliceableInterface $sliceable
     *
     * @return AbstractSliced
     */
    public function slice(SliceableInterface $sliceable) : AbstractSliced
    {
        return $sliceable->slice();
    }
}
