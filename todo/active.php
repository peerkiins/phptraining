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

            <form id="inputform" action="addtodolist.php" method="GET">
                <?php
                if(!empty($todoList))
                {?>
                    <input type="checkbox" id="select-all" name="select-all">
                <?php
                }
                ?>               
                <div id="inputcontainer">
                    <input type="text" name="todo-item" id="todo-item" placeholder="What needs to be done?" />
                </div>
            </form>

            <?php
            if(isset($_COOKIE['todo-items']))
            {
                $todoList = json_decode($_COOKIE['todo-items'], true);
                $count = sizeof($todoList);
                foreach($todoList as $todoItems => $todoItem)
                {
                    if($todoList[$todoItems]['completed'] == false)
                    {?>
                        <div id="itemcontainer"> 
                            <form action = "changestatus.php" method= "post">
                                <input type = "hidden" name = "todo-item" value = "<?php echo $todoItems ?>">
                                <input type="checkbox" name="checkbox" <?php echo $todoItem['completed'] ? 'checked' : '' ?>>
                            </form>
                            <label id="itemlabel" for="checkbox"> <?php echo $todoItems ?> </label>
                            <form action = "deletetodolist.php" method= "post">
                                <input type = "hidden" name = "todo-item" value = "<?php echo $todoItems ?>">
                                <button id="delete">&#x2716</button>
                            </form>
                        </div>      
            <?php
                    }
                }
            }

            if(!empty($todoList))
            { ?>
            <div class="footernav">
                <span class="count">
                    <span><?=($count)?></span>
                    <span>items left</span>
                </span>
                <ul>
                    <li>
                        <a href="index.php">All</a>
                    </li>
                    <li>
                        <a href="active.php">Active</a>
                    </li>
                    <li>
                        <a href="completed.php">Completed</a>
                    </li>
                </ul>
                <?php
                    if(isset($_COOKIE['todo-items']))
                    {
                        $todoList = json_decode($_COOKIE['todo-items'], true);
                        $iscompletedfound = false;
                        foreach($todoList as $todoItems => $todoItem)
                        {
                            if(!empty($todoList[$todoItems]['completed']))
                            {
                                $iscompletedfound = true;
                                break;
                            }
                        }                    
                        if ($iscompletedfound)
                        { 
                        ?>
                            <div id = "delete-all"><a href="deletecompleted.php">Delete Completed</a></div>
                        <?php
                        }
                    }
                ?>
            </div>
            <div id="blankbox1"></div>
            <div id="blankbox2"> </div>
            <?php
            }
            ?>

            <script>
                const checkboxes = document.querySelectorAll('input[type=checkbox]');
                checkboxes.forEach(box => {
                    box.onclick = function () {
                        this.parentNode.submit();
                    };
                })
            </script>  
        </div>
    </div>
</body>

</html>