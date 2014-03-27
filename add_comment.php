<?php
include 'core/init.php';
include 'includes/overall/header.php';

if(isset($_GET['author']) && isset($_GET['content']) && isset($_GET['article_id'])) {
    $comment_data = array(
                'article_id' => $_GET['article_id'],
                'author' => $_GET['author'],
                'content' => $_GET['content'],
            );
   /*
    $article_id = $_POST['article_id'];
    $author = $_POST['author'];
    $content = $user_data['content'];
    // To opakowac w add_comment()
    
    mysql_query("INSERT INTO `comments` (`article_id`, `author`, `content`) VALUES ('$article_id','$author', '$content')"); 
    */
    add_comment($comment_data);
// To opakowac w add_comment()
    //echo $article_id;
   header('Location: index.php?id='.$article_id);
} 

include 'includes/overall/footer.php';
?>