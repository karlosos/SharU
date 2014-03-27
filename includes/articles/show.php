<?php

//Jezeli wyswietlamy pojedynczego newsa
$article_id = $_GET['id'];
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $result = mysql_query("SELECT id, title, content, excerpt, author, date FROM articles WHERE id=" . $_GET['id']);
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        echo ("
			<div class='news'> 
				<div class='tytul'>" . $row[1] . "</div>  
				<div class='tresc'>" . $row[2] . "</div>

				<div class='autor'>
				<table style='width: 100%'>
				<tr>
					<td style='width: 33%'>" . $row[5] . "</td>
                                        <td align='center' style='width: 33%'>" . $row[4] . "</td>
					<td align='right' style='width: 33%'><a class='autor' href='edit_article.php?id=" . $_GET['id'] . "'><img src='css/images/edit_ico.png'></a> <a class='autor' href='delete_article.php?id=" . $_GET['id'] . "'><img src='css/images/delete_ico.png'></a> </td>
				</tr>
				</table>
				</div>
			</div>
			");
    }
    mysql_free_result($result);
	
    include 'includes/comments/show.php';
    ?>

    <form name='comment' action='add_comment.php' method='get'>
        <ul>
            <li>Autor:</li>
            <li> <input type='text' name='author'></input> </li>
            <li> Komentarz: </li>
            <li> <textarea class='ckeditor' name='content' cols='50' rows='10'> </textarea> </li>
            <li> <input type="hidden" name="article_id" value="<?php echo $article_id ?>" </li>
            <li> <input type='submit' value='Wyslij'> </li>
        </ul>
    </form>

<?php
    
    
}
//Sciana newsow w kolejnosci od najnowszego
else {
    $result = mysql_query("SELECT MAX(id) as id FROM articles");
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    $id = $row["id"];

    for ($i = $id; $i > 0; $i--) {
        $result = mysql_query("SELECT id, title, content, excerpt, author, date FROM articles WHERE id=" . $i);

        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
            $small = $row[2];
            if (strlen($small) > 500) {
                $small = substr($row[2], 0, 500) . "... <br> <a href='index.php?id=" . $row[0] . "'>Czytaj więcej</a> ";
            }
            echo("
			<div class='news'> 
				<div class='tytul'>" . $row[1] . "</div>  
				<div class='tresc'>" . $small . "</div>
				
				<div class='autor'>
				<table style='width: 100%'>
				<tr>
					<td style='width: 33%'>" . $row[5] . "</td>
					<td align='center' style='width: 33%'> ".$row[4]." </td>
					<td align='right' style='width: 33%'><a class='autor' href='index.php?id=" . $row[0] . "'>Read all</a> </td>
				</tr>
				</table>
				</div>
			</div>
			");
        }
        mysql_free_result($result);
    }
}
?>