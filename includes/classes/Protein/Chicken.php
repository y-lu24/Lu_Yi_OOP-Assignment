<?php

namespace MyProject\Protein;

class Chicken extends Protein
{
    protected string $cutType;

    public function __construct(string $cutType)
    {
        $this->cutType = $cutType;
        $this->name = 'Chicken ' . ucfirst($cutType);
        $this->calories = 165;
        $this->origin = 'Worldwide';
        $this->isVegan = false;
    }

    public function describe()
    {
        parent::describe();
        echo "<p>Cut: <em>" . $this->cutType . "</em>.</p>";
    }

    public function cook()
    {
        parent::cook();
        echo "<p>For best results, cook " . $this->name . " to an internal temperature of 165°F (74°C).</p>";
    }

    public function eat()
    {
        echo "<p>" . $this->name . " pairs well with rice, salad, or roasted vegetables.</p>";
    }
}
