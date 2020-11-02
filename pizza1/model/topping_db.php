<?php
function add_topping($db, $topping_name)  
{
    $query = "INSERT INTO menu_toppings
                (topping)
              VALUES
                ('$topping_name')";
    $db->exec($query);
}

function get_toppings($db) {
    $query = 'SELECT * FROM menu_toppings';
    $statement = $db->prepare($query);
    $statement->execute();
    $toppings = $statement->fetchAll();
    return $toppings;    
}
