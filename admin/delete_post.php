<?php
require(dirname(__DIR__).'/php_library/class_admin.php');

$id = $_GET['id'];
$post = new Admin();
$post->delete($id);
?>