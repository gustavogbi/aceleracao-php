<?php

// Builder - Design Pattern

interface Builder{
    public function setUpperIncluded($upperIncluded);
    public function setLowerIncluded($lowerIncluded);
    public function setDigitIncluded($digitIncluded);
    public function setPunctuationIncluded($punctuationIncluded);
    public function setAmbiguousExcluded($ambiguousExcluded);
    public function setMinUpper($minUpper);
    public function setMinLower($minLower);
    public function setMinDigits($minDigits);
    public function setMinPunctuation($minPunctuation);
}

class PasswordGenerator implements Builder
{
    private $upperIncluded;
    private $lowerIncluded;
    private $digitIncluded;
    private $punctuationIncluded;
    private $ambiguousExcluded;
    private $minUpper;
    private $minLower;
    private $minDigits;
    private $minPunctuation;
    
    public function __construct(){
        $this->upperIncluded=false;
        $this->lowerIncluded=false;
        $this->digitIncluded=false;
        $this->punctuationIncluded=false;
        $this->ambiguousExcluded=false;
        $this->minUpper=0;
        $this->minLower=0;
        $this->minDigits=0;
        $this->minPunctuation=0;
    }

    public function setUpperIncluded($upperIncluded){
        $this->upperIncluded=$upperIncluded;
    }

    public function setLowerIncluded($lowerIncluded){
        $this->lowerIncluded=$lowerIncluded;
    }

    public function setDigitIncluded($digitIncluded){
        $this->digitIncluded=$digitIncluded;
    }

    public function setPunctuationIncluded($punctuationIncluded){
        $this->punctuationIncluded=$punctuationIncluded;
    }

    public function setAmbiguousExcluded($ambiguousExcluded){
        $this->ambiguousExcluded=$ambiguousExcluded;
    }

    public function setMinUpper($minUpper){
        $this->minUpper=$minUpper;
    }

    public function setMinLower($minLower){
        $this->minLower=$minLower;
    }

    public function setMinDigits($minDigits){
        $this->minDigits=$minDigits;
    }

    public function setMinPunctuation($minPunctuation){
        $this->minPunctuation=$minPunctuation;
    }
}
