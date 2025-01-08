<?php 

function Input(string $message): string {
    echo "$message : ";
    return trim(fgets(STDIN));
}