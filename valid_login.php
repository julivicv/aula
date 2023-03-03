<?php

session_start();

if (!isset($_SESSION['auth'])) {
    header("location: signIn.php?erro=2");
    die;
}
