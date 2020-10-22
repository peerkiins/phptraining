<?php

print_r($_GET['td-Completed']);
echo($_GETT['td-Completed']);

if (isset($_GET['td-Completed']))
{
    if(isset($_COOKIE["td-done"]))
    {
        $done = json_decode($_COOKIE["td-done"]);
    } 

    else 
    {
        $done = [];
    }
    
    array_push($done, $_POST["td-Completed"]);
    setcookie("td-done", json_encode($done));
    header("Location: /todo");
}

?>