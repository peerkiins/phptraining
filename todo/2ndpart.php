<?Php   if(!empty($todoList)) { ?>
        <div class="footernav">
            <div class="count">
                <span><?=($count)?></span>
                <?Php if($count == 1) { ?>
                <span>item left</span>
            </div>
<?php 
        }
        else 
        { 
?>
                <span>items left</span>  
        </div>
<?php   } ?>
        <ul>
            <li>
                <a href="/todo">All</a>
            </li>
            <li>
                <a href="active.php">Active</a>
            </li>
            <li>
                <a href="completed.php">Completed</a>
            </li>
        </ul>
<?php
                    if(isset($_SESSION['todo-items']))
                    {
                        $todoList = json_decode($_SESSION['todo-items'], true);
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
                            <div id = "delete-all"><a href="deletecompleted.php">Clear Completed</a></div>
<?php
                        }
                    }
?>
                </div>
                <div id="blankbox1"></div>
                <div id="blankbox2"> </div>
<?php       } ?>
        </div>
    </div>
</body>

</html>