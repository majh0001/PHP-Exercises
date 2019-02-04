<?php

//Task 1

$language = "PHP";
"Welcome to $language !";
$greeting = "Welcome to $language ! ";
echo $greeting;
echo "<hr style=\"margin 1rem 0\">";





//Task 2

$firstname = "Amit";
$lastname = "Majhi";
$day = "18";
$month = "march";
$year = 1994;
$assembled = "My Name Is $firstname $lastname. I was born on $day of $month in $year.";
echo "$assembled";
echo "<hr style=\"margin 1rem 0\">";

//Task 3
$length = 3.5;
$width = 6.5;
$area = $length * $width;
echo $area;
echo "<hr style=\"margin 1rem 0\">";

//Task 4
$product = "armchair";
$price = 249.00;
$tax = 0.13;
$delivery = 0.05;
$delivery = ($price +$price * $tax) * 0.05;
$total = $price * (1 + $tax) + $delivery;
$total = number_format($total, 2, ".", "");
echo "$product : $total";
echo "<hr style=\"margin 1rem 0\">";

echo "<figure>
<img src=\"https://placehold.jp/24/e8d2ae/fff/300x300.png\" alt=\"placeholder-image\">

<figcaption> Welcome to PHP ! My name is Amit Majhi. I was born on 18 of March in 1994. 22.75 armchair : 295.44 </figcaption>
</figure>";

?>


