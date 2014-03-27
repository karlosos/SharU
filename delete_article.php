<?php
/**
 * Usuwanie artykulu
 * 
 * @package articles
 * @author Karol Dzialowski
 */
include 'core/init.php';
include 'includes/overall/header.php';

// Czy moge usunac artykul.
// Tylko autorzy i moderatorzy moga usuwac
if (isset($_GET['id']) === true && empty($_POST) === true) {
    $article_id = $_GET['id'];
    if (author_from_id($article_id) !== $user_data['username']) {
        if (user_moderator($user_data['username']) !== true) {
            $errors[] = 'You do not have permissions.';
        }
    }
}
?>

<h2 class="widget">Delete article</h2>

<?php
if (isset($_GET['succes']) && empty($_GET['succes'])) {
    echo 'You\'ve deleted article!';
} else {
    if (empty($_GET['id']) === false && isset($_GET['id']) === true && empty($errors) === true) {
        $article_id = $_GET['id'];
        delete_article($article_id);
        header('Location: delete_article.php?succes');
        exit();
    } else if (empty($errors) === false) {
        echo output_errors($errors);
    }
}
include 'includes/overall/footer.php';
?>
