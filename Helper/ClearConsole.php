<?php

function clearConsole() {
    if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
        // Windows
        shell_exec('cls');
    } else {
        // Linux/Unix/Mac
        shell_exec('clear');
    }
}