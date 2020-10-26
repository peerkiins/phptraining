<?php

session_start();

if(isset($_SESSION['todo-items']))
{
    $todoList = json_decode($_SESSION['todo-items'], true);

    $tobechanged = $_POST['todo-item'];
    
    $todoList[$tobechanged]['completed'] = !$todoList[$tobechanged]['completed'];

    $_SESSION['todo-items'] = json_encode($todoList);
    header("Location: /todo"); 
}
?>
