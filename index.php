<?php

$root = $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally';

if (isset($_GET['page'])) {
    if (is_file($root . '/' . $_GET['page'])) {
        include $root . '/controller/' . $_GET['page'] . '.php';
    }
} else {
    include $root . '/controller/home.php';
}