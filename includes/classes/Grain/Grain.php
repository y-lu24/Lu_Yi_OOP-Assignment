<?php

namespace MyProject\Grain;

use MyProject\Food;
use MyProject\NutritionTrait;

class Grain extends Food
{
    use NutritionTrait;

    public bool $isGlutenFree = false;

    public function describe()
    {
        $glutenLabel = $this->isGlutenFree ? 'gluten-free' : 'contains gluten';
        echo "<p><strong>" . $this->name . "</strong> is a grain from " . $this->origin . ". It is " . $glutenLabel . " and has " . $this->calories . " calories per serving.</p>";
    }

    public function cook()
    {
        echo "<p>" . $this->name . " is typically boiled or steamed before eating.</p>";
    }
}
