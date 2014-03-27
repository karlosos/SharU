<?php
/**
 * Dodawanie komentarza
 * 
 * @package comments
 * @author Karol Dzialowski
 * @copyright (c) 2014, Karol Działowski https://github.com/karlosos/SharU
 */

include 'core/init.php';
include 'includes/overall/header.php';

// Jeżeli są ustawione dane komentarza dodaj go
if (isset($_GET['author']) && isset($_GET['content']) && isset($_GET['article_id'])) {
    $comment_data = array(
        'article_id' => $_GET['article_id'],
        'author' => $_GET['author'],
        'content' => $_GET['content'],
    );

    add_comment($comment_data);
    header('Location: index.php?id=' . $article_id);
}

include 'includes/overall/footer.php';
?>