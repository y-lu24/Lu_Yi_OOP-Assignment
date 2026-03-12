<?php

namespace MyProject\Fruit;

class Banana extends Fruit
{
    protected string $ripeness;

    public function __construct(string $ripeness)
    {
        $this->ripeness = $ripeness;
        $this->name = 'Banana';
        $this->calories = 89;
        $this->origin = 'Southeast Asia';
        $this->sweetness = 'sweet';
    }

    public function describe()
    {
        parent::describe();
        echo "<p>Ripeness: <em>" . $this->ripeness . "</em>.</p>";
    }

    public function eat()
    {
        if ($this->ripeness === 'overripe') {
            echo "<p>This banana is best used for banana bread!</p>";
        } else {
            echo "<p>Peel and eat the " . $this->ripeness . " banana on its own or add it to a smoothie.</p>";
        }
    }
}
