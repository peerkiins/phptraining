<?php
session_start();

if(isset($_SESSION['todo-items']))
{
    $todoList = json_decode($_SESSION['todo-items'], true);

    foreach($todoList as $todoItems => $todoItem)
    {
        if($todoList[$todoItems]['completed'] == true){
            unset($todoList[$todoItems]);
            
            $_SESSION['todo-items'] = json_encode($todoList);
        }
    }
}
header("Location: /todo"); 
?>