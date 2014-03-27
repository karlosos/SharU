<?php

/**
 * Wylogowanie
 * 
 * @package users
 * @author Karol Dzialowski
 */
session_start();
session_destroy();
header('Location: index.php');
?>