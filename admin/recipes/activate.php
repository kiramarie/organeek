<?php
session_start();
include_once '../class/class_recipe.php';
include_once '../include/config.php';
$recipe = new Recipe();
$id=$_GET['id'];
if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}
$recipe->recipeActivate($id);
