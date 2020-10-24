<?php

if(isset($_COOKIE['todo-items']))
{
    $todoList = json_decode($_COOKIE['todo-items'], true);

    $tobedeleted = $_POST['todo-item'];

    unset($todoList[$tobedeleted]);

    setcookie('todo-items', json_encode($todoList));
    header("Location: /todo"); 
}

?>