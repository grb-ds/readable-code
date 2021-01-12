<?php

function orderPizza($pizzaType, $username)
{
    $price = calculateCosts($pizzaType);
    $address = getAddress($username);

    echo 'Creating new order... <br>';
    echo "A {$pizzaType} pizza should be sent to {$username}.<br>";
    echo "The address: {$address}.<br>";
    echo 'The bill is €'.$price.'.<br>';
    echo "Order finished.<br><br>";
}

function getAddress($username)
{
    switch ($username) {
        case 'koen':
            $address = 'a yacht in Antwerp';
            break;
        case 'manuele':
            $address = 'somewhere in Belgium';
            break;
        case 'students':
            $address = 'BeCode office';
            break;
        default:
            throw new Exception ('Address is unknown');
    }
    return $address;
}

function calculateCosts($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            return 5;
        case 'golden':
            return 100;
        case 'calzone':
            return 10;
        case 'hawai':
            throw new Exception('Computer says no');
        default:
            return 'unknown';
    }
}

function orderPizzaAll()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

orderPizzaAll();
