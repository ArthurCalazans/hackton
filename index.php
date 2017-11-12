<?php

$root = $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally';
session_start();
session_destroy();
if (isset($_GET['page'])) {
    if (is_file($root . '/' . $_GET['page']) . '.php') {
        include $root . '/controller/' . $_GET['page'] . '.php';
    }
} else {
    include $root . '/controller/home.php';
}