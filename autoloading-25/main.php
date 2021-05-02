<html>
<head>
    <meta http-equiv="refresh" content="3"> 
     <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
<h3>
<?php

/*---------Death rouls
    function __autoload($name){
        include "{$name}.php";
    }

(new Bike)->getType();
echo "<br>";
(new Spaceship)->launch();
*/
//New ruls=================================
function autoload($name){
    if(strpos($name, "Planet_") !== false){
        $filename = str_replace("Planet_", "", $name); // str_replace("search", with what?, into what? )
        include strtolower("planets/{$filename}.php");
    }
    else{
    include strtolower("{$name}.php");
    }
}
spl_autoload_register('autoload');
// -------------------------------------
(new Bike)->getType();
echo "<br>";
(new Spaceship)->launch(); // direct spaceship.php
echo "<br>";
(new Planet_mars)->getName(); // planets to mars.php
echo "<br>";
(new Planet)->getName(); // direct Planet.php


?>
</h3>
</body>
</html>