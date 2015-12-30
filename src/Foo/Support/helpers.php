<?php

if (!function_exists('e')) {
    function e($value)
    {
        return htmlentities($value, ENT_QUOTES, 'UTF-8', false);
    }
}
