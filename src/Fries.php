<?php declare(strict_types=1);

namespace Bonfyre\Kitchen;

class Fries
{
    private $state;

    /**
     * @param Potato $potato
     */
    public function __construct(UnpeeledPotato $potato)
    {
        $this->state = $potato;
    }

    /**
     * @return FryBox
     */
    public function make() : FryBox
    {
        $this->peelPotato();
        $this->slicePotato();
        $this->fryPotato();
        $this->saltPotato();
        $this->boxPotato();

        return $this->state;
    }

    /**
     * @return void
     */
    private function peelPotato() : void
    {
        $this->state = $this->peeler()->peel($this->state);
    }

    /**
     * @return Peeler
     */
    protected function peeler() : Peeler
    {
        return new Peeler;
    }

    /**
     * @return void
     */
    private function slicePotato() : void
    {
        $this->state = $this->slicer()->slice($this->state);
    }

    /**
     * @return Slicer
     */
    protected function slicer() : Slicer
    {
        return new Slicer;
    }

    /**
     * @return void
     */
    private function fryPotato() : void
    {
        $this->state = $this->fryer()->fry($this->state);
    }

    /**
     * @return Fryer
     */
    protected function fryer() : Fryer
    {
        return new Fryer;
    }

    /**
     * @return void
     */
    private function saltPotato() : void
    {
        $this->state = $this->salter()->salt($this->state);
    }

    /**
     * @return Salter
     */
    protected function salter() : Salter
    {
        return new Salter;
    }

    /**
     * @return void
     */
    private function boxPotato() : void
    {
        $this->state = $this->boxer()->box($this->state);
    }

    /**
     * @return Boxer
     */
    protected function boxer() : Boxer
    {
        return new Boxer;
    }
}
