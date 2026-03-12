<?php

namespace MyProject\Grain;

class Rice extends Grain
{
    protected string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
        $this->name = $type . ' Rice';
        $this->calories = 206;
        $this->origin = 'East Asia';
        $this->isGlutenFree = true;
    }

    public function describe()
    {
        parent::describe();
        echo "<p>Type: <em>" . $this->type . "</em>.</p>";
    }

    public function eat()
    {
        echo "<p>" . $this->name . " is a staple food — serve it alongside stir-fry, curry, or stew.</p>";
    }
}
