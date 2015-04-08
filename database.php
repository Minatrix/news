<?php
require_once __DIR__ . '/news_form.php';
mysql_connect('localhost', 'root', '');
mysql_select_db('news');
$title = mysql_real_escape_string($_POST['news_name']);
$create_date = mysql_real_escape_string($_POST['create_date']);
$query = "INSERT INTO `news`(`title`, `create_date`) VALUES('" . $title . "', '" . $create_date . "')";
$res = mysql_query($query);
while (false !== ($row = mysql_fetch_array($res))) {
    echo $row['title'];
}