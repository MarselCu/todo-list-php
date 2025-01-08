<?php

require_once 'Feature/AddTodoList.php';
require_once 'Helper/Input.php';

function viewAddTodoList() {
    addTodoList(input('Add new todo'));
    viewShowTodoList();
}