<?php

/**
 * Glowna konfiguracja
 * 
 * W tym pliku dolaczamy pliki z funkcjami i inne konfiguracje.
 * @package configuration
 * @author Karol Dzialowski
 */
session_start();
//error_reporting(0);

/**
 * Wymaganie pliku core/database/connect.php
 * 
 * @see connect.php
 */
require 'database/connect.php';

/**
 * Wymaganie pliku core/functions/general.php
 * 
 * @see general.php
 */
require 'functions/general.php';

/**
 * Wymaganie pliku core/functions/users.php
 * 
 * @see users.php
 */
require 'functions/users.php';

/**
 * Wymaganie pliku core/functions/articles.php
 * 
 * @see articles.php
 */
require 'functions/articles.php';

require 'functions/comments.php';

// Jezeli uzytkownich jest zalogowany to pobiera jego dane. Jezeli zostal zbanowany
// to wylogowuje go i przekierowuje.
if (logged_in() === true) {
    $session_user_id = $_SESSION['user_id'];
    $user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email');
    if (user_active($user_data['username']) === false) {
        session_destroy();
        header('Location: index.php');
        exit();
    }
}
$errors = array();
?>