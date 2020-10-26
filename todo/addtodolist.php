<?php

session_start();

if(isset($_GET['todo-item']))
{
    $todoItem = trim($_GET['todo-item']);
    if(!empty($todoItem))
    {
        if(isset($_SESSION['todo-items']))
        {
            $todoJson = $_SESSION['todo-items'];
            $todoList = json_decode($todoJson, true);            
        }
        else 
        {
            $todoList = [];
        }

        $todoList[$todoItem] = ['completed' => false];
        $_SESSION['todo-items'] = json_encode($todoList);
    }
    header("Location: /todo"); 
}


?>