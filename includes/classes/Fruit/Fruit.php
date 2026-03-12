<?php

namespace MyProject\Fruit;

use MyProject\Food;
use MyProject\NutritionTrait;

class Fruit extends Food
{
    use NutritionTrait;

    public string $sweetness = '';

    public function describe()
    {
        echo "<p><strong>" . $this->name . "</strong> is a fruit from " . $this->origin . ". It tastes " . $this->sweetness . " and has " . $this->calories . " calories per serving.</p>";
    }

    public function cook()
    {
        echo "<p>" . $this->name . " is usually eaten fresh, but can also be baked or blended.</p>";
    }
}
