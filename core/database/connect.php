<?php

/**
 * Laczenie z baza danych
 * 
 * Plik konfiguracyjny odpowiedzialny za laczeniem z baza danych
 * 
 * @package core
 * @author Karol Dzialowski
 */
$connect_error = 'Przepraszamy za problemy';
mysql_connect('localhost', 'root', '') or die($connect_error);
mysql_select_db('blog') or die($connect_error);
;
?>