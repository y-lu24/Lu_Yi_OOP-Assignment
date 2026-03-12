<?php

namespace MyProject\Fruit;

class Apple extends Fruit
{
    protected string $variety;

    public function __construct(string $variety)
    {
        $this->variety = $variety;
        $this->name = $variety . ' Apple';
        $this->calories = 95;
        $this->origin = 'Central Asia';
        $this->sweetness = 'sweet';
    }

    public function describe()
    {
        parent::describe();
        echo "<p>Variety: <em>" . $this->variety . "</em>.</p>";
    }

    public function eat()
    {
        echo "<p>" . $this->name . " is great eaten raw, sliced with peanut butter, or baked into a pie.</p>";
    }
}
