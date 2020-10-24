<?php


if(isset($_GET['todo-item']))
{
    $todoItem = trim($_GET['todo-item']);
    if(!empty($todoItem))
    {
        if(isset($_COOKIE['todo-items']))
        {
            $todoJson = $_COOKIE['todo-items'];
            $todoList = json_decode($todoJson, true);            
        }
        else 
        {
            $todoList = [];
        }

        $todoList[$todoItem] = ['completed' => false];
        setcookie('todo-items', json_encode($todoList));
        header("Location: /todo"); 
    }
}


?>