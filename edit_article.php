<?php
/**
 * Edytowanie artykulu
 * 
 * @package articles
 * @author Karol Dzialowski
 */
include 'core/init.php';
include 'includes/overall/header.php';

// Edytowac moze tylko autor albo moderator
if (isset($_GET['id']) === true && empty($_POST) === true) {
    $article_id = $_GET['id'];
    if (author_from_id($article_id) !== $user_data['username']) {
        if (user_moderator($user_data['username']) !== true) {
            $errors[] = 'You do not have permissions.';
        }
    }
}
?>

<h2 class="widget">Edit article</h2>

<?php
if (isset($_GET['succes']) && empty($_GET['succes'])) {
    echo 'You\'ve editted article!';
} else if (empty($_POST) === false && empty($errors) === true) {
    $article_data = array(
        'title' => $_POST['title'],
        //'excerpt' 		=> $_POST['excerpt'],
        'content' => $_POST['content'],
    );
    update_article($_POST['article_id'], $article_data);
    header('Location: edit_article.php?succes');
    exit();
} else if (empty($errors) === false) {
    echo output_errors($errors);
} else {
    ?>

    <script src="ckeditor/ckeditor.js"></script>

    <form method="post" action="" name="edit_article">
        <li>
            Title<br>
            <input type="text" name="title" style="width: 300px;" value="<?php echo title_from_id($_GET['id']); ?>"/>
        </li>
        <!--
        <li>
                Excerpt<br>	
                <textarea class="ckeditor" cols="80" name="excerpt" rows="10"> <?php echo excerpt_from_id($_GET['id']) ?> </textarea>
        </li>
        -->
        <li>
            Content<br>
            <textarea class="ckeditor" cols="80" name="content" rows="10"> <?php echo content_from_id($_GET['id']) ?> </textarea>
        </li>
        <li>
            <input type="hidden" name="article_id" value="<?php echo $_GET['id']; ?>">
        </li>
        <li>
            <input type="submit" value="Send"/>  
        </li>
    </form>

    <?php
}
include 'includes/overall/footer.php';
?>
