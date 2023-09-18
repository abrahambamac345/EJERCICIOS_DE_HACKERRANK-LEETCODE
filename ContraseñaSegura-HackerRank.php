<?php

/*
 * Complete the 'minimumNumber' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. STRING password
 */

function minimumNumber($n, $password) {
    // Return the minimum number of characters to make the password strong

    $numbers = "0123456789";
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $special_characters = "!@#$%^&*()-+";

    $faltante = 0;

    if (strpbrk($password, $numbers) === false){
        $faltante++;
    }
    if (strpbrk($password, $lower_case) === false){
        $faltante++;
    }
    if (strpbrk($password, $upper_case) === false){
        $faltante++;
    }
    if (strpbrk($password, $special_characters) === false){
        $faltante++;
    }

    $caracteres = 6 - $n; 

    if($faltante > $caracteres){
        $caracteres = $faltante;
    }

    return $caracteres; 

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$password = rtrim(fgets(STDIN), "\r\n");

$answer = minimumNumber($n, $password);

fwrite($fptr, $answer . "\n");

fclose($fptr);