<?php
if(isset($_COOKIE['todo-items']))
{
    $todoList = json_decode($_COOKIE['todo-items'], true);

    $tobechanged = $_POST['todo-item'];
    
    $todoList[$tobechanged]['completed'] = !$todoList[$tobechanged]['completed'];

    setcookie('todo-items', json_encode($todoList));
    header("Location: /todo"); 
}
?>
