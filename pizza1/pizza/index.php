<?php

require('../model/database.php');
require('../model/user_db.php');
require('../model/topping_db.php');
require('../model/size_db.php');
require('../model/order_db.php');
require('../model/day_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'welcome_page';
    }
}

if ($action == 'welcome_page') {
    try {
        $username = filter_input(INPUT_GET, 'username');
        if ($username != NULL) {
            $get_personal_order = get_personal_order($db, $username);
        }
        $sizes = get_sizes($db);
        $toppings = get_toppings($db);
        $users = get_users($db);
        include('student_welcome.php');
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
    }
} else if ($action == 'order_pizza'){
    try{
        $sizes = get_sizes($db);
        $toppings = get_toppings($db);
        $users = get_users($db);
        include('order_pizza.php');
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
    }   
} else if ($action=='finish'){    
    try {
        $username = filter_input(INPUT_POST, 'username');
        $size = filter_input(INPUT_POST, 'size');
        $userid = get_user_by_name($db, $username);
        $sizes = get_sizes($db);
        $toppings = get_toppings($db);
        $users = get_users($db);
        include('student_welcome.php');
        add_order($db, $username, $size, $topping);
    } catch (Exception $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    header ("Location: .?username=$username");
} else if ($action == 'check_status') {
    try{
        $username = filter_input(INPUT_POST, 'username');
        $userid = get_user_by_name($db, $username);
        $sizes = get_sizes($db);
        $toppings = get_toppings($db);
        $users = get_users($db);
        include('student_welcome.php');  
    } catch (Exception $ex) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
    }
    header ("Location: .?username=$username");
} else if ($action == 'acknowledge') {
    try{
        $username = filter_input(INPUT_POST, 'username');
        $userid = get_user_by_name($db, $username);
        finish_pizza($db, $userid[0]);
        $sizes = get_sizes($db);
        $toppings = get_toppings($db);
        $users = get_users($db);
        include('student_welcome.php');    
    } catch (Exception $ex) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
    }
    header ("Location: .?username=$username");
}

