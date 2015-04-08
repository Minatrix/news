<?php
require_once __DIR__ . '/news_form.php';
$mysqli = new mysqli('localhost', 'root', '', 'news');
$title = $mysqli->real_escape_string($_POST['news_name']);
$create_date = $mysqli->real_escape_string($_POST['create_date']);
$query = "INSERT INTO `news`(`title`, `create_date`) VALUES('". $title. "', '". $create_date. "')";
$res = $mysqli->query($query);
?>