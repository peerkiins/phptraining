<?php include '1stpart.php' ?>
<?php
    if(isset($_SESSION['todo-items']))
    {
        $todoList = json_decode($_SESSION['todo-items'], true);
        $count = sizeof($todoList);
        foreach($todoList as $todoItems => $todoItem)
        {
            if($todoList[$todoItems]['completed'] == true)
            {
?>
            <div id="itemcontainer"> 
                <form action = "changestatus.php" method= "post">
                    <input type = "hidden" name = "todo-item" value = "<?php echo $todoItems ?>"> 
                    <div id="todoitemcontainer">
                        <input class="checkbox" type="checkbox" name="checkbox" <?php echo $todoItem['completed'] ? 'checked' : '' ?>>
                        <span id="circlecontainer"><button class="changestatus">&#x2713;</button></span>
                        <label id="itemlabel" for="checkbox"> <?php echo $todoItems ?> </label>
                    </div> 
                </form>
                <form action = "deletetodolist.php" method= "post">
                    <input type = "hidden" name = "todo-item" value = "<?php echo $todoItems ?>">
                    <button class="delete">&#x2716;</button>
                </form>
            </div>      
<?php
            }
        }
    }
?>

<?php include '2ndpart.php' ?>

