<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Funcao que substitui o print_r de maneira mais eficaz.
 */
if (!function_exists('pr')) {

    function pr($var, $die = false) {
        echo "<pre>";
        print_r($var);
        echo "</pre>\n";

        if ($die) {
            die();
        }
    }
}

/*
 * Funcao que converte numero para reais... Organizar um helper pra isso.
 */
if (!function_exists('numeroEmReais')) {

    function numeroEmReais($numero) {
        return "R$ " . number_format($numero, 2, ",", ".");
    }
}