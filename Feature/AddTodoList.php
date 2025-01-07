<?php

function addTodoList(string $todo) {
    if ($todo == "") {
        return;
    }

    global $todoList;

    array_push($todoList, $todo);
}
