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

            <form action="addtodolist.php" method="GET">
                <input type="checkbox" id="select-all" name="select-all">
                <div id="inputcontainer">
                    <input type="text" name="todo-item" id="todo-item" placeholder="What needs to be done?" />
                </div>
            </form>

            <?php
            if(isset($_COOKIE['todo-items']))
            {
                $todoList = json_decode($_COOKIE['todo-items'], true);
                foreach($todoList as $todoItems => $todoItem)
                { ?>

                <div id="itemcontainer"> 
                    <input type="checkbox" name="checkbox" <?php echo $todoItem['completed'] ? 'checked' : '' ?>>
                    <label id="itemlabel" for="checkbox"> <?php echo $todoItems ?> </label>
                </div>
                    
            <?php
                }
            }
            ?>
                
            <div class="footernav">
                <span class="count">
                    <span><?=($number)?></span>
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
        </div>
    </div>
</body>

</html>