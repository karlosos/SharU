<?php

function add_comment($comment_data) {
    array_walk($comment_data, 'array_sanitize');

    $fields = '`' . implode('`, `', array_keys($comment_data)) . '`';
    $data = '\'' . implode('\', \'', $comment_data) . '\'';

    mysql_query("INSERT INTO `comments` ($fields) VALUES ($data)");
}

function delete_comment($comment_id) {
    $comment_id = sanitize($comment_id);
    //echo "DELETE FROM `articles` WHERE `id` = '$article_id'";
    mysql_query("DELETE FROM `comments` WHERE `id` = '$comment_id'");
}

function active_comment($comments) {
    foreach($comments as $id) {
        mysql_query("UPDATE `comments` SET `active`='1' WHERE id =".$id);
    }
}

