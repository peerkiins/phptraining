<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="todo.css">
    <title>Document</title>
</head>

<body>
    <div class="main-container">
        <div class="list-container">

            <div id="header">
                <span id="headertxt">todos</span>
            </div>

            <?php
                pre_r($_GET);
                pre_r($todoItem);

                $todoItem = $_GET;
                echo $todoItem;
                $todoList = array();

                $todoList[] = $_GET;

                array_push($todoList, $todoItem,);

                
                echo $todoList;
            ?>


            <form action="" method="get">
                <div id="inputcontainer">
                    <input type="text" name="todoItem" id="todoItem" placeholder="What needs to be done?" />
                </div>

                <div class="itemcontainer">
                    <input type="checkbox" name="item" id="item" />
                    <label id="itemlabel" for="item">todo item </label>
                </div>

                <div class="footernav">
                    <span class="count">
                        <span>4</span>
                        <span>items left</span>
                    </span>
                    <ul>
                        <li>
                            <a>All</a>
                        </li>
                        <li>
                            <a>Active</a>
                        </li>
                        <li>
                            <a>Completed</a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php

function pre_r( $array ) {
    echo '<pre>' ;
    print_r($array);
    echo '</pre>' ;
}

?>