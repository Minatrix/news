<?php
require_once __DIR__ . '/news_form.php';
function connect()
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('news');
}

function insert_news()
{
    connect();
    if (!empty($_POST['news_name']) && !empty($_POST['create_date']) && !empty($_POST['news_text'])) {
        $title = mysql_real_escape_string($_POST['news_name']);
        $create_date = mysql_real_escape_string($_POST['create_date']);
        $query = "INSERT INTO `news`(`title`, `create_date`) VALUES('" . $title . "', '" . $create_date . "')";
        return $res = mysql_query($query);
    }
}

insert_news();