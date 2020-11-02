<?php
function add_user($db, $user_name, $room)  
{
    $query = "INSERT INTO shop_users
                (username, room)
              VALUES
                ('$user_name', '$room')";
    $db->exec($query);
}

function get_users($db) {
    $query = 'SELECT * FROM shop_users';
    $statement = $db->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll();
    return $users;    
}

function get_user_by_name($db, $username){
    $query = 'SELECT id from shop_users where username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $userid = $statement->fetch();
    return $userid;
}