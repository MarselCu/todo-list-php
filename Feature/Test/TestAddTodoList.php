<?php

require_once '../addTodoList.php';
require_once '../../Model/TodoList.php';

addTodoList("Belajar PHP");
addTodoList("Belajar OOP PHP");

var_dump($todoList);