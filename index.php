<?php

spl_autoload_register(function ($class) {
    $class = str_replace('Foods\\', '', $class);
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
    </body>
</html>