<?php

function showTodoList()
{
    global $todoList;

    if (is_array($todoList)) {
        foreach ($todoList as $index => $todo) {
            $number = $index + 1;
            echo "$number. $todo" . PHP_EOL;
        }
    }
}
