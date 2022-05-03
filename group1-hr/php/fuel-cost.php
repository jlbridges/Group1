<?php
# The following function is called whenever your program needs to input data.
# You can change it to use other sources rather than fgets().
function input() {
    return fgets(STDIN);
}

echo "How many miles are you going to be traveling?" . PHP_EOL;
$milesTraveled = input();
echo "What is the miles per gallon of the car you will be using?" . PHP_EOL;
$mpg = input();
echo "What is the cost of gas per gallon?" . PHP_EOL;
$cost = input();
$travelCost = $milesTraveled / $mpg * $cost;
echo "The total cost of the trip is " . $travelCost . " dollars." . PHP_EOL;
?>