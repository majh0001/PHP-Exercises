<?php

// Task 1
$food = ['beans' , 'pasta' , 'mojitos' , 'cake'];
echo $food[0]. "<br>". $food[1]. "<br>". $food[2]. "<br>". $food[3]. "<br>";
echo "<hr style=\"margin 1rem 0\">";

// Task 2
echo '<ul>';
echo '<li>' . implode( '</li><li>', $food) . '</li>';
echo '</ul>';
echo "<hr style=\"margin 1rem 0\">";

// Task 3
echo "<hr style=\"margin 1rem 0\">";
$food = array(
"beans" => "starters",
"pasta" => "course",
"mojitos" => "drink",
"cake" => "desert"
    

);

foreach ($food as $food_assoc => $food)
{
    echo $food.  " | " . $food_assoc. "<br>";
}

// Task 4

$food_assoc = array(
    "beans" =>[
        "type" => "starters",
        "origin" => "france"
    ],
    
        "pasta" => [
                    "type" => "main",
                    "origin" => "italian"
        ],
        
        "mojitos" => [
                       "type" => "drink",
                       "origin" => "mexico"
        ],
            
        
        "cake" => [ 
                    "type" => "desert",
                    "origin" => "london"
        ]        
    
    );


echo key($food_assoc) ." | ". $food_assoc['beans']['type'] ." | ". 
    $food_assoc['beans']["origin"]."<br>";
next($food_assoc);

echo key($food_assoc) ." | ". $food_assoc['pasta']['type'] ." | ". 
    $food_assoc['pasta']["origin"] . "<br>";
next($food_assoc);

echo key($food_assoc) ." | ". $food_assoc["mojitos"]['type'] ." | ". $food_assoc["mojitos"]["origin"] . "<br>";
next($food_assoc);

echo key($food_assoc) ." | ". $food_assoc['cake']['type'] ." | ". $food_assoc["cake"]["origin"] . "\n";

echo "<hr style=\"margin 1rem 0\">";

