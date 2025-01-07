<?php

function removeTodoList(int $number): bool {
    global $todoList;

    $listLength = sizeof($todoList);

    if ($number > $listLength || $number < 1) {
        return false;
    }

    for ($i = $number; $i < $listLength; $i++) {
        $todoList[$i - 1] = $todoList[$i];
    }

    unset($todoList[$listLength-1]);

    return true;
}