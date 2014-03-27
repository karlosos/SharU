<?php

/**
 * Funkcje odpowiadajace za uzytkownikow
 * 
 * @package functions
 * @author Karol Dzialowski
 */

/**
 * Rejestruj uzytkownika
 * 
 * Zabezpiecza wyslane dane i hashuje haslo. Tablice z danymi zamienia na dwa
 * stringi: klucze i wartosci. Wartosci sa w pojedynczych cudzyslowiach i
 * odseparowane przecinkami. Czyli zachowujemy skladnie zapytania.
 * 
 * @param array $register_data Dane do rejestracji
 */
function register_user($register_data) {
    array_walk($register_data, 'array_sanitize');
    $register_data['password'] = md5($register_data['password']);

    $fields = '`' . implode('`, `', array_keys($register_data)) . '`';
    $data = '\'' . implode('\', \'', $register_data) . '\'';

    mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
}

/**
 * Ilosc zarejestrowanych uzytkownikow
 * 
 * Jezeli ktos ma ustawione active na 0 to znaczy ze jest zbanowany i nie liczy
 * sie w tej funkcji
 * 
 * @return int Ilosc zarejestrowanych uzytkownikow
 */
function user_count() {
    return mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `active` = 1"), 0);
}

/**
 * Pobiera dane informacje o uzytkowniku
 * 
 * W tej funkcji mozemy podac wiecej parametrow. Wysyla zapytanie do bazy danych
 * jezeli podane jest wiecej niz jeden argument i o te argumenty prosi baze danych.
 * 
 * Przyklad: user_data($session_user_id, 'user_id', 'username', 'password','first_name', 'last_name', 'email');
 * 
 * http://pl1.php.net/func_get_args
 * http://pl1.php.net/func_num_args
 * 
 * @param int $user_id Id uzytkownika
 * @return array Dane o uzytkowniku
 */
function user_data($user_id) {
    $data = array();
    $user_id = (int) $user_id;

    $func_num_args = func_num_args();
    $func_get_args = func_get_args();

    if ($func_num_args > 1) {
        unset($func_get_args[0]);

        $fields = '`' . implode('`, `', $func_get_args) . '`';
        $data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `user_id` = $user_id"));
        return $data;
    }
}

/**
 * Czy jest zalogowany
 * 
 * @return bool 
 */
function logged_in() {
    return (isset($_SESSION['user_id'])) ? true : false;
}

/**
 * Czy istnieje uzytkownik
 * 
 * @param string $username
 * @return bool
 */
function user_exists($username) {
    $username = sanitize($username);
    $query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'");
    return (mysql_result($query, 0) == 1) ? true : false;
}

/**
 * Czy email jest zajety
 * 
 * @param string $email
 * @return bool
 */
function email_exists($email) {
    $email = sanitize($email);
    $query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '$email'");
    return (mysql_result($query, 0) == 1) ? true : false;
}

/**
 * Czy uzytkownik nie jest zbanowany
 * @param string $username
 * @return bool
 */
function user_active($username) {
    $username = sanitize($username);
    $query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `active` = 1");
    return (mysql_result($query, 0) == 1) ? true : false;
}

/**
 * Czy uzytkownik jest moderatorem
 * @param string $username
 * @return bool
 */
function user_moderator($username) {
    $username = sanitize($username);
    $query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `moderator` = 1");
    return (mysql_result($query, 0) == 1) ? true : false;
}

/**
 * Id z nazwy uzytkownika
 * @param string $username
 * @return int
 */
function user_id_from_username($username) {
    $username = sanitize($username);
    $query = mysql_query("SELECT `user_id` FROM `users` WHERE `username` = '$username'");
    return mysql_result($query, 0, 'user_id');
}

/**
 * Logowanie uzytkownika
 * 
 * Poberia id uzytkownika z danej nazwy. Zabezpiecza username i hashuje haslo. 
 * Zwraca czy dane sie zgadzaja.
 * 
 * @param string $username
 * @param string $password
 * @return bool
 */
function login($username, $password) {
    $user_id = user_id_from_username($username);

    $username = sanitize($username);
    $password = md5($password);

    return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `password` = '$password'"), 0) == 1) ? $user_id : false;
}

?>