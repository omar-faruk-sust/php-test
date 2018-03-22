<?php

/**
* To validare the price
*/
function validatePrice($price)
{
    if (preg_match("/^[0-9]+(\.[0-9]{2})?$/", $price)) {
        return true;
    }
    return false;
}

/**
*
* Print the $data
*/
function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}
