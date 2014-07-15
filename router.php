<?php

$ru = strtolower($_SERVER['REQUEST_URI']);

if (strpos($ru, '/api/rest') === 0) {
    $_SERVER['REQUEST_URI'] = 'api.php?type=rest';
} elseif (strpos($ru, '/media') === 0 || strpos($ru, '/skin') === 0 || strpos($ru, '/js') === 0) {
    return FALSE;
} elseif (file_exists('.' . explode('?', $ru)[0])) {
    return FALSE;
} else {
    include_once 'index.php';
}

