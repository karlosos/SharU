<?php

$article_id = $_GET['id'];
$result = mysql_query("SELECT MAX(id) as id FROM comments WHERE article_id = '$article_id' AND active = '1'");

$row = mysql_fetch_array($result, MYSQL_ASSOC);
$id = $row["id"];

for ($i = $id; $i > 0; $i--) {
    $result = mysql_query("SELECT author, content, date FROM comments WHERE id=" . $i ." AND article_id = '$article_id'");

    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        echo("
            <div class='comment'>
                <li> Autor: $row[0] </li>
                <li> Data: $row[2] </li>
                <li> $row[1] <li>
            ");
        echo "<hr width='30%'>";
    }
    mysql_free_result($result);
}