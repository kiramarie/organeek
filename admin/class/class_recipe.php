<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Recipe{
    var $recipe_id,$title,$body,$photo,$thumbnail,$category,$sub_category,$ingredients,$instructions,$benefits,$overview,$recommended,$sub_category2;
    
    public function __construct() {
        $db = new DB_Class();
    }
    
    public function recipeAdd(){
        $insert = mysql_query("INSERT INTO recipes (title,category,sub_category,photo,thumbnail,benefits,overview,instructions,recommended,sub_category2)"
                . "VALUES ('$this->title','$this->category','$this->sub_category','$this->photo','$this->thumbnail','$this->benefits','$this->overview','$this->instructions','$this->recommended','$this->sub_category2')");
        if(!$insert) die ("error ".  mysql_error ());
        $_SESSION['recipe_success'] = "You successfully added new recipe";
        header("Location:index.php");
    }
    
    public function recipeList(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM recipes");
        while($row = mysql_fetch_array($search)){
            $list[$i]['recipe_id'] = $row['recipe_id'];
            $list[$i]['title'] = $row['title'];
            $list[$i]['body'] = $row['body'];
            $list[$i]['category'] = $row['category'];
            $list[$i]['sub_category'] = $row['sub_category'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['thumbnail'] = $row['thumbnail'];
            $list[$i]['status'] = $row['status'];
            $list[$i]['created'] = $row['created'];
            $list[$i]['ingredients'] = $row['ingredients'];
            $list[$i]['instructions'] = $row['instructions'];
            $list[$i]['benefits'] = $row['benefits'];
            $list[$i]['sub_category2'] = $row['sub_category2'];
            $i++;
        }
        return $list;
    }
    
    public function recipeView($id){
        $search = mysql_query("SELECT * FROM recipes WHERE recipe_id='$id'");
        while($row = mysql_fetch_array($search)){
            $this->recipe_id = $row['recipe_id'];
            $this->title = $row['title'];
            $this->body = $row['body'];
            $this->category = $row['category'];
            $this->sub_category = $row['sub_category'];
            $this->photo = $row['photo'];
            $this->thumbnail = $row['thumbnail'];
            $this->status = $row['status'];
            $this->created = $row['created'];
            $this->ingredients = $row['ingredients'];
            $this->instructions  = $row['instructions'];
            $this->overview = $row['overview'];
            $this->benefits = $row['benefits'];
            $this->recommended = $row['recommended'];
            $this->sub_category2 = $row['sub_category2'];
        }
    }
    
    public function recipeEdit($id){
        $update = mysql_query("UPDATE recipes SET title='$this->title',category='$this->category',sub_category='$this->sub_category',"
                . "ingredients='$this->ingredients',instructions='$this->instructions',overview='$this->overview',benefits='$this->benefits',"
                . "recommended='$this->recommended',sub_category2='$this->sub_category2' WHERE recipe_id='$id'");
        $_SESSION['recipe_success']='You successfully update the recipe';
        if(!$update) die ("error ".  mysql_error ());
        //header("Location: index.php");
    }
    
    public function recipeActivate($id){
        $update = mysql_query("UPDATE recipes SET status=1 WHERE recipe_id='$id'");
        $_SESSION['recipe_success']="You activated the recipe";
        header("Location: index.php");
    }
    public function recipeDeactivate($id){
        $update = mysql_query("UPDATE recipes SET status=0 WHERE recipe_id='$id'");
        $_SESSION['recipe_success']="You deactivated the recipe";
        header("Location: index.php");
    }
    
    public function recipeDelete($id){
        $delete = mysql_query("DELETE FROM recipes WHERE recipe_id='$id'");
        $_SESSION['recipe_success']='You deleted ther ecipe';
        header("Location: index.php");
    }
}