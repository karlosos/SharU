<?php

/**
 * Wylogowanie
 * 
 * @package users
 * @author Karol Dzialowski
 * @copyright (c) 2014, Karol Działowski https://github.com/karlosos/SharU
 */
session_start();
session_destroy();
header('Location: index.php');
?>