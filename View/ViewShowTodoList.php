<?php 

require_once 'Feature/ShowTodoList.php';
require_once 'Helper/Input.php';
require_once 'ViewAddTodoList.php';
require_once 'ViewRemoveTodoList.php';

function viewShowTodoList() {
    echo "TODOLIST: " . PHP_EOL;
    showTodoList();
    echo 'What You Want to do?' . PHP_EOL;
    echo '1. Add To Do' . PHP_EOL;
    echo '2. Remove To Do' . PHP_EOL;

    $userInput = input('Action Number');

    switch ($userInput) {
        case '1':
            viewAddTodoList();
            break;
        case '2':
            viewRemoveTodoList();
            break;
    }
}