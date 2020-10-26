<?php
session_start();

if(isset($_SESSION['todo-items']))
{
    $todoList = json_decode($_SESSION['todo-items'], true);

    $tobedeleted = $_POST['todo-item'];

    unset($todoList[$tobedeleted]);

    $_SESSION['todo-items'] = json_encode($todoList);
    header("Location: /todo"); 
}

?>