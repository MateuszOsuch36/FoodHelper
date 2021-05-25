<?php

//------
// Mateusz Kuskowski
//------

abstract class TypeOfRecipts
{
    public const reciptTags =
    [
        'Breakfast',
        'Dinner',
        'Supper'
        //etc
    ];
}


abstract class Recipt
{
    public $NameOfRecipt;
    private $ArrayOfIntegriends;
    private $Tag;

    public function __construct(string $NameOfRecipt,array $ArrayOfIntegriends,string $Tag)
    {
        $this->NameOfRecipt = $NameOfRecipt;
        $this->ArrayOfIntegriends = $ArrayOfIntegriends;
        $this->Tag = $Tag;
    }

    public function getIntegriends()
    {
        return $this->ArrayOfIntegriends;
    }
    public function getTypeOfMeal()
    {
        return $this->Tag;
    }

}