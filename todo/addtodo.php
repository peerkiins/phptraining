<?php

$tdItem = trim($_POST['todoItem']);

if (isset($_POST['todoItem']))
{
    if(empty($tdItem))
    {
        header("Location: /todo");
    } 
    else 
    {
        if(isset($_COOKIE["todoItems"]))
        {
            $todoList = json_decode($_COOKIE["todoItems"]);
        } 

        else 
        {
            $todoList = [];
        }
        
        array_push($todoList, $_POST["todoItem"]);
        setcookie("todoItems", json_encode($todoList));
        header("Location: /todo"); 
    }                  
}
else 
    http_response_code(400);
?>