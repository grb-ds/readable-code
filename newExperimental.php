<?php

// fw = for who
//TODO: change the name
function orderPizza($pizzaType, $username)
{
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzaType; //TODO
    $price = calculateCosts($pizzaType);

    //TODO convert to array
    $address = 'unknown';
    if ($username == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($username == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($username == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   " pizza should be sent to " . $username . "<br>The address: " . $address;
    echo $toPrint . "<br>";
    echo "The bill is €" . $price . "<br/>";
    echo "Order finished"." <br></br>";
}

function totalPrice($price) {
    return $price;
}

function test($pizzaType) {
    echo "Test: type is {$pizzaType}. <br>";
}

function calculateCosts($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
        {
            $cost = 5;
            break;
        }
        case 'golden':
        {
            $cost = 100;
            break;
        }
        case 'calzone':
        {
            $cost = 10;
            break;
        }
        case 'hawai':
        {
            throw new Exception('Computer says no');
            break;
        }
        default :
            $cost = 'unknown';
    }
    return $cost;

}
function orderPizzaAll()
{
    $test = 0;
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
    //TODO
}

function makeAllHappy()
{
    orderPizzaAll();
}

makeAllHappy();
