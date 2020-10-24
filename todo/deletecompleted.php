<?php

if(isset($_COOKIE['todo-items']))
{
    $todoList = json_decode($_COOKIE['todo-items'], true);

    foreach($todoList as $todoItems => $todoItem)
    {
        if($todoList[$todoItems]['completed'] == true){
            unset($todoList[$todoItems]);
        }
    }
    setcookie('todo-items', json_encode($todoList));
    header("Location: /todo"); 
}

?>