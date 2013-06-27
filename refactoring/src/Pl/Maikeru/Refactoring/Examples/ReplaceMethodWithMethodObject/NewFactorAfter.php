<?php
namespace Pl\Maikeru\Refactoring\Examples\ReplaceMethodWithMethodObject;


class NewFactorAfter {
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
        if ($this->isInitialEfactorBelowAcceptedThreshold()) {
            return $this->getEFactorForValueBelowAcceptedThreshold();
        } else {
            return $this->getEFactorForNormalValue();
        }
    }


    private function getQFactor()
    {
        return $this->card->getQualitySubtractor() - $this->quality;
    }
    private function getEFactorFloor()
    {
        return 1.3 + $this->quality;
    }
    private function getInitialEFactor()
    {
        return $this->eFactor + (0.1 - $this->getQFactor() * (0.08 + $this->getQFactor() * 0.02));
    }
    private function isInitialEfactorBelowAcceptedThreshold()
    {
        return $this->getInitialEFactor() < $this->getEFactorFloor();
    }
    private function getEFactorForValueBelowAcceptedThreshold()
    {
        return $this->getEFactorFloor() * 2;
    }
    private function getEFactorForNormalValue()
    {
        return $this->getEFactorFloor() * 5;
    }


}