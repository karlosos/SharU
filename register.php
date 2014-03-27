<?php
/**
 * Rejestracja
 * 
 * @package users
 * @author Karol Dzialowski
 */
include 'core/init.php';
include 'includes/overall/header.php';
//Jezeli mamy podane dane
if (empty($_POST) === false) {
    //Tworzy tablice z wymaganymi danymi. Mozna to edytowac w zaleznosci od potrzeb
    $required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
    //Jezeli ktoras dana jest pusta i jest ona wymagana zwroc blad
    foreach ($_POST as $key => $value) {
        if (empty($value) && in_array($key, $required_fields) === true) {
            $errors[] = 'Fields marked with an asterisk are required.';
            break 1;
        }
    }

    //Zaawansowana walidacja
    if (empty($errors) === true) {
        if (user_exists($_POST['username']) === true) {
            $errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
        }
        if (preg_match("/\\s/", $_POST['username']) == true) {
            $errors[] = 'Your username must not contain any spaces.';
        }
        if (strlen($_POST['password']) < 6) {
            $errors[] = 'Password must be at least 6 characters.';
        }
        if ($_POST['password'] !== $_POST['password_again']) {
            $errors[] = 'Your passwords do not match.';
        }
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'A valid email address is required.';
        }
        if (email_exists($_POST['email']) === true) {
            $errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
        }
    }
}
?>

<h2 class="widget">Register</h2>

<?php
//Zwraca komunikat o sukcesie
if (isset($_GET['succes']) && empty($_GET['succes'])) {
    echo 'You\'ve been registered succesfully!';
} else {
    //Zabezpiecza dane i rejestruje uzytkownika
    if (empty($_POST) === false && empty($errors) === true) {
        $register_data = array(
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
        );

        register_user($register_data);
        header('Location: register.php?succes');
        exit();
    } else if (empty($errors) === false) {
        //Wyswietla bledy
        echo output_errors($errors);
    }
    ?>

    <form action="" method="post">
        <li>
            Username*: <br>
            <input type="text" name="username">		
        </li>
        <li>
            Password*: <br>
            <input type="password" name="password">		
        </li>
        <li>
            Password again*: <br>
            <input type="password" name="password_again">		
        </li>
        <li>
            First name*: <br>
            <input type="text" name="first_name">		
        </li>
        <li>
            Last name: <br>
            <input type="text" name="last_name">		
        </li>
        <li>
            E-mail*: <br>
            <input type="text" name="email">		
        </li>
        <li>
            <input type="submit" value="Register">
        </li>
    </form>
    <?php
}
include 'includes/overall/footer.php';
?>