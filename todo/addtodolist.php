<?php


if(isset($_GET['todo-item']))
{
    $todoItem = trim($_GET['todo-item']);
    if(!empty($todoItem))
    {
        if(isset($_COOKIE['todo-items']))
        {
            $todoJson = $_COOKIE['todo-items'];
            $jsonArray = json_decode($todoJson, true);            
        }
        else 
        {
            $jsonArray = [];
        }

        $jsonArray[$todoItem] = ['completed' => false];
        setcookie('todo-items', json_encode($jsonArray));
        
        // echo '<pre>';
        // var_dump($jsonArray);
        // echo '</pre>';

        header("Location: /todo"); 
    }
}


?>