<?php

class Todo {

   public $todoList = array();

   public function __construct($todoItem) {

        array_push($todoList, $todoItem);
   }
}

$Item = $_GET['Item'];

$maketodo = new Todo($Item);
