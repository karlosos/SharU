<?php
/**
 * Nowy artykul
 * 
 * @package articles
 * @author Karol Dzialowski
 */
include 'core/init.php';
include 'includes/overall/header.php';
?>

<h2 class="widget">Add article</h2>

<?php
//Jezeli jestem zalogowany.
if (isset($_SESSION['user_id'])) {
    //Jezeli zwrocono sukces wyswietl komunikat
    if (isset($_GET['succes']) && empty($_GET['succes'])) {
        echo 'You\'ve added article!';
    } else {
        //Jezeli mamy dane i nie bylo bledow dodaj artykul z danymi zabezpieczonymi
        if (empty($_POST) === false && empty($errors) === true) {
            $article_data = array(
                'title' => $_POST['title'],
                //'excerpt' 		=> $_POST['excerpt'],
                'content' => $_POST['content'],
                'author' => $user_data['username'],
            );

            add_article($article_data);
            header('Location: new_article.php?succes');
            exit();
        } else if (empty($errors) === false) {
            echo output_errors($errors);
        }
        ?>

        <script src="ckeditor/ckeditor.js"></script>

        <form method="post" action="" name="add_article">
            <li>
                Title<br>
                <input type="text" name="title" style="width: 300px;"/>
            </li>
            <!--
            <li>
                    Excerpt<br>	
                    <textarea class="ckeditor" cols="80" name="excerpt" rows="10"> </textarea>
            </li>
            -->
            <li>
                Content<br>
                <textarea class="ckeditor" cols="80" name="content" rows="10"> </textarea>
            </li>
            <li>
                <input type="submit" value="Send"/>  
            </li>
        </form>

        <?php
    }
} else {
    echo('You\'re not logged in. You must log in to post articles');
}
include 'includes/overall/footer.php';
?>
