<?php

/**
 * Index
 * 
 * @author Karol Dzialowski
 */
include 'core/init.php';
include 'includes/overall/header.php';



// Jezeli jest zalogowany wyswietl artykuly
if (isset($_SESSION['user_id'])) {
    include 'includes/articles/show.php';
} else {
    echo('<h2 class="widget">Home</h2>');
    echo('You\'re not logged in. You must log in to see articles.');
}
?>
<?php include 'includes/overall/footer.php'; ?>