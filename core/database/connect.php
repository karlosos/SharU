<?php

/**
 * Laczenie z baza danych
 * 
 * Plik konfiguracyjny odpowiedzialny za laczeniem z baza danych
 * 
 * @package core
 * @author Karol Dzialowski
 * @copyright (c) 2014, Karol Działowski https://github.com/karlosos/SharU
 */
mysql_connect('db', 'user', 'password') or die("Couldn't connect to MySQL");
mysql_select_db('blog') or die("Couldn't select db");
;
?>