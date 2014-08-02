<?php
session_start();
include_once '../class/class_blog.php';
include_once '../include/config.php';
$blog = new Blog();
$id=$_GET['id'];
if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}
$blog->blogDelete($id);
