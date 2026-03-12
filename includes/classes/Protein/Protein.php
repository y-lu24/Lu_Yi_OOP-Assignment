<?php

namespace MyProject\Protein;

use MyProject\Food;

class Protein extends Food
{
    public bool $isVegan = false;

    public function describe()
    {
        $veganLabel = $this->isVegan ? 'vegan' : 'non-vegan';
        echo "<p><strong>" . $this->name . "</strong> is a " . $veganLabel . " protein source from " . $this->origin . " with " . $this->calories . " calories per serving.</p>";
    }

    public function cook()
    {
        echo "<p>" . $this->name . " can be grilled, baked, or pan-fried to safe internal temperatures.</p>";
    }
}
