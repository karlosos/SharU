<?php

/**
 * Funckje generalne
 * 
 * @package functions
 * @author Karol Dzialowski
 */

/**
 * Zabezpiecza tablice
 * 
 * Podana funkcja ma na celu zabezpieczenie danych wejściowych, 
 * które są następnie przekazywane do bazy. Jest to jedna z metod 
 * zapobiegania SQLInjection. Chodzi o zestaw znaków: \x00, \n, \r, 
 * \*, *', " oraz \x1a, które mogą wpłynąć na zapytanie.
 * 
 * http://us3.php.net/manual/pl/function.mysql-real-escape-string.php
 * 
 * @param array $item Tablica do zabezpieczenia - referencja
 */
function array_sanitize(&$item) {
    $item = mysql_real_escape_string($item);
}

/**
 * Zwraca zabezpieczone dane
 * 
 * Podana funkcja ma na celu zabezpieczenie danych wejściowych, 
 * które są następnie przekazywane do bazy. Jest to jedna z metod 
 * zapobiegania SQLInjection. Chodzi o zestaw znaków: \x00, \n, \r, 
 * \*, *', " oraz \x1a, które mogą wpłynąć na zapytanie.
 * 
 * http://us3.php.net/manual/pl/function.mysql-real-escape-string.php
 * 
 * @param type $data Dane do zabezpieczenia
 * @return type Zabezpieczone dane
 */
function sanitize($data) {
    return mysql_real_escape_string($data);
}

/**
 * Wyswietla bledy
 * 
 * Rozbija tablice z bledami.
 * 
 * @param array $errors Tablica z bledami
 * @return string Bledy w postaci listy nienumerowanej
 */
function output_errors($errors) {
    return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}

?>