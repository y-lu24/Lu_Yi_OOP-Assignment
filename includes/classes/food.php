<?php

namespace MyProject;

interface FoodInterface
{
    public function eat();
    public function describe();
}

trait NutritionTrait
{
    public function getNutritionInfo()
    {
        echo "<p><strong>" . $this->name . "</strong> — " . $this->calories . " calories per serving. Origin: " . $this->origin . ".</p>";
    }
}

class Food implements FoodInterface
{
    public string $name = '';
    public int $calories = 0;
    public string $origin = '';

    public function describe()
    {
        echo "<p>This is a food called <strong>" . $this->name . "</strong>, originating from " . $this->origin . ". It has " . $this->calories . " calories per serving.</p>";
    }

    public function cook()
    {
        echo "<p>" . $this->name . " can be prepared in various ways.</p>";
    }

    public function eat()
    {
        echo "<p>You eat " . $this->name . " by itself or as part of a meal.</p>";
    }
}
