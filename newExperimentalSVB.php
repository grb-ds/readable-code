<?php

// change the name
function orderPizza($pizzaType, $username)
{
    echo 'Creating new order... <br>';
    $price = calculateCosts($pizzaType);
    if ($username == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($username == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($username == 'students') {
        $address = 'BeCode office';
    } else {
        $address = 'unknown';
    }
    $toPrint = 'A '. $pizzaType . ' pizza should be sent to ' . $username . ". <br>The address: {$address}.";
    echo $toPrint; 
    echo '<br>';
    echo 'The bill is €'.$price.'.<br>';
    echo "Order finished.<br><br>";
}

function totalPrice($price) 
{
    return $price;
}

function test($pizzaType) 
{
    echo "Test: type is {$pizzaType}. <br>";
}
test('hawai');
// use switch
function calculateCosts($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            $cost = 5;
            break;
        case 'golden':
            $cost = 100;
            break;
        case 'calzone':
            $cost = 10;
            break;
        case 'hawai':
            throw new Exception('Computer says no');
            break;
        default:
            $cost = 'unknown';
            break;
    }
    return $cost;
}

function orderPizzaAll()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

function makeAllHappy($submit) {
    if ($submit) {
        orderPizzaAll();
    } else {
        // Should not do anything when false
    }
}

makeAllHappy(true);