<?php

use MyProject\Fruit\Apple;
use MyProject\Fruit\Banana;
use MyProject\Grain\Rice;
use MyProject\Protein\Chicken;

spl_autoload_register(function ($class) {
    $class = str_replace('MyProject\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows

    require_once $filepath;
});

?>
<!DOCTYPE html>
<html lang="en">
    <body>

        <h1>Foods — OOP Assignment</h1>

        <h2>Fruits</h2>

        <?php
            $apple = new Apple('Fuji');
            $apple->describe();
            $apple->cook();
            $apple->eat();
            $apple->getNutritionInfo();

            echo "<hr>";

            $banana = new Banana('overripe');
            $banana->describe();
            $banana->cook();
            $banana->eat();
            $banana->getNutritionInfo();
        ?>

        <h2>Grains</h2>

        <?php
            $rice = new Rice('jasmine');
            $rice->describe();
            $rice->cook();
            $rice->eat();
            $rice->getNutritionInfo();
        ?>

        <h2>Proteins</h2>

        <?php
            $chicken = new Chicken('breast');
            $chicken->describe();
            $chicken->cook();
            $chicken->eat();
        ?>

    </body>
</html>