<?php

require_once '../removeTodoList.php';
require_once '../addTodoList.php';
require_once '../showTodoList.php';
require_once '../../Model/TodoList.php';

addTodoList("Belajar PHP");
addTodoList("Belajar Laravel");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar Javascript");

var_dump($todoList);

removeTodoList(2);

var_dump($todoList);