<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="todothis.css">
    <title>TodoList</title>
</head>

<body>
    <div class="main-container">
        <div class="list-container">

            <div id="header">
                <span id="headertxt">todos</span>
            </div>

            <div id="inputform">
                <form id="inputcontainer" action="addtodolist.php" method="GET">              
                    <input type="text" name="todo-item" id="todo-item" placeholder="What needs to be done?" />
                </form>
            </div>