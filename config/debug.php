<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * @param $data
 */
function prd($data)
{
    echo '<pre>'; print_r($data); die;
}

/**
 * @param $data
 */
function pr($data)
{
    echo '<pre>'; print_r($data); echo '</pre>';
}

