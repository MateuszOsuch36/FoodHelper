<?php

//------
// Mateusz Kuskowski
//------

abstract class TypeOfRecipts
{
    // Const array of usable Tags

    public const reciptTags =
    [
        'Breakfast',
        'Dinner',
        'Supper'
        //etc
    ];
}


class Recipt
{
    // Basic Data
    public $NameOfRecipt;
    // Ingredients
    private $ArrayOfIngredients;
    // Tag of what kind of meal is it
    private $Tag;

    public function __construct(string $NameOfRecipt,array $ArrayOfIngredients,string $Tag)
    {
        $this->NameOfRecipt = $NameOfRecipt;
        $this->ArrayOfIngredients = $ArrayOfIngredients;
        $this->Tag = $Tag;
    }

    // Getters to prevent data from changing it

    public function getIngredients()
    {
        return $this->ArrayOfIngredients;
    }

    public function getTypeOfMeal()
    {
        return $this->Tag;
    }

}