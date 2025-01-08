<?php 

require_once 'Feature/RemoveTodoList.php';
require_once 'Helper/Input.php';

function viewRemoveTodoList() {
    removeTodoList(input('Remove To Do Number'));
    viewShowTodoList();
}