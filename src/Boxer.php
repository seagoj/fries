<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class Boxer
{
    /**
     * @param BoxableInterface $boxable
     *
     * @return AbstractBoxed
     */
    public function box(BoxableInterface $boxable) : AbstractBoxed
    {
        return $boxable->box();
    }
}
