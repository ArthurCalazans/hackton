<?php

$root = $_SERVER['DOCUMENT_ROOT'] . '/rally/';
session_start();

if (isset($_GET['page'])) {
    if (is_file($root . '/' . $_GET['page']) . '.php') {
        include $root . '/controller/' . $_GET['page'] . '.php';
    }
} else {
    include $root . '/controller/home.php';
}