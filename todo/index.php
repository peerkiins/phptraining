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

            <form action="addtodo.php" method="POST">
                <input type="checkbox" id="select-all" name="select-all">
                <div id="inputcontainer">
                    <input type="text" name="todoItem" id="todoItem" placeholder="What needs to be done?" />
                </div>
            </form>

                <?php
                if(isset($_COOKIE['todoItems']))
                {
                    $todoList = json_decode($_COOKIE["todoItems"]);
                    foreach($todoList as $key => $value)
                    {
                            $GLOBALS['number'] = $key + 1;
                            $status_completed = false;   
                ?>
                    <div id="itemcontainer">
                        <form method="GET">
                            <input type="checkbox" id="Item" name="tdCompleted<?=$key?>">
                            <label id="itemlabel" for="tdCompleted<?=$key?>"> <?=$value?> </label>
                            <input type="submit" value="check">
                        </form>
                    </div>
                <?php
                    }
                    if(isset($_GET["tdCompleted".$key]))
                    {
                        $status_completed = true;
                    }

                    if($status_completed)
                    {
                        print_r($value);
                    }
                    
                    var_dump($_GET["tdCompleted"], $status_completed);
                }
                ?>
            <?php
            if(!empty($todoList))
            {
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
            <?php
            }?>
        </div>
    </div>
</body>

</html>