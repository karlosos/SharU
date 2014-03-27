<?php
include 'core/init.php';
include 'includes/overall/header.php';

if(isset($_POST)) {
    active_comment($_POST);
}

$result = mysql_query("SELECT MAX(id) as id FROM comments WHERE active = '0'");

$row = mysql_fetch_array($result, MYSQL_ASSOC);
$id = $row["id"];
?>

<form name="comment_update" action="" method="post">

<?php
for ($i = $id; $i > 0; $i--) {
    $result = mysql_query("SELECT author, content, date, id FROM comments WHERE id=".$i." AND active = '0'");

    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        echo("
            <div class='comment'>
                <li> Autor: $row[0] </li>
                <li> Data: $row[2] </li>
                <li> $row[1] </li>
                <li> <input type='radio' name='". $row[3] ."' value='". $row[3] ."'>Zatwierdź </li>
            ");
        echo "<hr width='30%'>";
    }
    mysql_free_result($result);
}
?>
    <input type="submit" value="Send"/>  
<?php
include 'includes/overall/footer.php'; ?>