<?php
namespace Pl\Maikeru\Refactoring\Examples\ReplaceMethodWithMethodObject;


class NewFactor {
    private $card;
    private $eFactor;
    private $qFactor;
    private $quality;
    private $eFactorFloor;
    private $newFactor;
    public function __construct($card, $eFactor, $quality)
    {
        $this->card = $card;
        $this->eFactor = $eFactor;
        $this->quality = $quality;
    }
    public function compute()
    {
        $qFactor = $this->card->getQualitySubtractor() - $this->quality;
        $eFactorFloor = 1.3 + $this->quality;
        $newFactor = $this->eFactor + (0.1 - $qFactor * (0.08 + $qFactor * 0.02));
        if ($newFactor < $eFactorFloor) {
        $newFactor = $eFactorFloor * 2;
        } else {
            $newFactor = $eFactorFloor * 5;
        }
        return $newFactor;
    }
}