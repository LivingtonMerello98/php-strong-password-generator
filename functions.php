<?php

//la funzione prenderà come parametro la il valore in GET
//range caratteri x pass. lunghezza del range. string vuota per new pass
function password_gen($value)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $len_chars = strlen($chars);
    $random_password = '';

    for ($i = 0; $i < $value; $i++) {
        $random_password .= $chars[rand(0, $len_chars - 1)];
    }

    return $random_password;
}
