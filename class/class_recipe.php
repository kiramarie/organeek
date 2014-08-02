<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Recipe{
    var $recipe_id,$title,$body,$photo,$thumbnail,$category,$sub_category,$sub_category2,$ingredients,$instructions,$benefits,$overview,$recommended,$created;
    
    public function __construct() {
        $db = new DB_Class();
    }
    
    public function recipeAdd(){
        $insert = mysql_query("INSERT INTO recipes (title,category,sub_category,,sub_category2,photo,thumbnail,benefits,overview,instructions,recommended)"
                . "VALUES ('$this->title','$this->category','$this->sub_category','$this->sub_category2','$this->photo','$this->thumbnail','$this->benefits','$this->overview','$this->instructions','$this->recommended')");
        if(!$insert) die ("error ".  mysql_error ());
        $_SESSION['recipe_success'] = "You successfully added new recipe";
        header("Location:index.php");
    }
    
    public function recipeList(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM recipes WHERE status=1");
        while($row = mysql_fetch_array($search)){
            $list[$i]['recipe_id'] = $row['recipe_id'];
            $list[$i]['title'] = $row['title'];
            $list[$i]['body'] = $row['body'];
            $list[$i]['category'] = $row['category'];
            $list[$i]['sub_category'] = $row['sub_category'];
            $list[$i]['sub_category2'] = $row['sub_category2'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['thumbnail'] = $row['thumbnail'];
            $list[$i]['status'] = $row['status'];
            $list[$i]['created'] = $row['created'];
            $list[$i]['benefits'] = $row['benefits'];
            $list[$i]['overview'] = $row['overview'];
            $list[$i]['ingredients'] = $row['ingredients'];
            $list[$i]['instructions'] = $row['instructions'];
            $list[$i]['recommended'] = $row['recommended'];
            $i++;
        }
        return $list;
    }
    
    public function recipeData($id){
        $search = mysql_query("SELECT * FROM recipes WHERE recipe_id='$id' AND status=1");
        while($row = mysql_fetch_array($search)){
            $this->recipe_id = $row['recipe_id'];
            $this->title = $row['title'];
            $this->category = $row['category'];
            $this->sub_category = $row['sub_category'];
            $this->sub_category2 = $row['sub_category2'];
            $this->photo = $row['photo'];
            $this->thumbnail = $row['thumbnail'];
            $this->status = $row['status'];
            $this->created = $row['created'];
            $this->benefits = $row['benefits'];
            $this->overview = $row['overview'];
            $this->ingredients = $row['ingredients'];
            $this->instructions = $row['instructions'];
            $this->recommended = $row['recommended'];
        }
    }
    
    public function recipeBodySkin(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM recipes WHERE sub_category='body and skin care' and status='1'");
        while($row = mysql_fetch_array($search)){
            $list[$i]['recipe_id'] = $row['recipe_id'];
            $list[$i]['title'] = $row['title'];
            $list[$i]['body'] = $row['body'];
            $list[$i]['category'] = $row['category'];
            $list[$i]['sub_category'] = $row['sub_category'];
            $list[$i]['sub_category2'] = $row['sub_category2'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['thumbnail'] = $row['thumbnail'];
            $list[$i]['status'] = $row['status'];
            $list[$i]['created'] = $row['created'];
            $list[$i]['benefits'] = $row['benefits'];
            $list[$i]['overview'] = $row['overview'];
            $list[$i]['ingredients'] = $row['ingredients'];
            $list[$i]['instructions'] = $row['instructions'];
            $list[$i]['recommended'] = $row['recommended'];
            $i++;
        }
        return $list;
    }
    
    public function recipeFaceCare(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM recipes WHERE sub_category='Face Care' and status='1'");
        while($row = mysql_fetch_array($search)){
            $list[$i]['recipe_id'] = $row['recipe_id'];
            $list[$i]['title'] = $row['title'];
            $list[$i]['body'] = $row['body'];
            $list[$i]['category'] = $row['category'];
            $list[$i]['sub_category'] = $row['sub_category'];
            $list[$i]['sub_category2'] = $row['sub_category2'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['thumbnail'] = $row['thumbnail'];
            $list[$i]['status'] = $row['status'];
            $list[$i]['created'] = $row['created'];
            $list[$i]['benefits'] = $row['benefits'];
            $list[$i]['overview'] = $row['overview'];
            $list[$i]['ingredients'] = $row['ingredients'];
            $list[$i]['instructions'] = $row['instructions'];
            $list[$i]['recommended'] = $row['recommended'];
            $i++;
        }
        return $list;
    }
    
    public function recipeHair(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM recipes WHERE sub_category='Hair' and status='1'");
        while($row = mysql_fetch_array($search)){
            $list[$i]['recipe_id'] = $row['recipe_id'];
            $list[$i]['title'] = $row['title'];
            $list[$i]['body'] = $row['body'];
            $list[$i]['category'] = $row['category'];
            $list[$i]['sub_category'] = $row['sub_category'];
            $list[$i]['sub_category2'] = $row['sub_category2'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['thumbnail'] = $row['thumbnail'];
            $list[$i]['status'] = $row['status'];
            $list[$i]['created'] = $row['created'];
            $list[$i]['benefits'] = $row['benefits'];
            $list[$i]['overview'] = $row['overview'];
            $list[$i]['ingredients'] = $row['ingredients'];
            $list[$i]['instructions'] = $row['instructions'];
            $list[$i]['recommended'] = $row['recommended'];
            $i++;
        }
        return $list;
    }
    
    public function recipeHousehold(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM recipes WHERE sub_category='House Products' and status='1'");
        while($row = mysql_fetch_array($search)){
            $list[$i]['recipe_id'] = $row['recipe_id'];
            $list[$i]['title'] = $row['title'];
            $list[$i]['body'] = $row['body'];
            $list[$i]['category'] = $row['category'];
            $list[$i]['sub_category'] = $row['sub_category'];
            $list[$i]['sub_category2'] = $row['sub_category2'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['thumbnail'] = $row['thumbnail'];
            $list[$i]['status'] = $row['status'];
            $list[$i]['created'] = $row['created'];
            $list[$i]['benefits'] = $row['benefits'];
            $list[$i]['overview'] = $row['overview'];
            $list[$i]['ingredients'] = $row['ingredients'];
            $list[$i]['instructions'] = $row['instructions'];
            $list[$i]['recommended'] = $row['recommended'];
            $i++;
        }
        return $list;
    }
    
    public function recipePersonalHygiene(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM recipes WHERE sub_category='Personal Hygiene' and status='1'");
        while($row = mysql_fetch_array($search)){
            $list[$i]['recipe_id'] = $row['recipe_id'];
            $list[$i]['title'] = $row['title'];
            $list[$i]['body'] = $row['body'];
            $list[$i]['category'] = $row['category'];
            $list[$i]['sub_category'] = $row['sub_category'];
            $list[$i]['sub_category2'] = $row['sub_category2'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['thumbnail'] = $row['thumbnail'];
            $list[$i]['status'] = $row['status'];
            $list[$i]['created'] = $row['created'];
            $list[$i]['benefits'] = $row['benefits'];
            $list[$i]['overview'] = $row['overview'];
            $list[$i]['ingredients'] = $row['ingredients'];
            $list[$i]['instructions'] = $row['instructions'];
            $list[$i]['recommended'] = $row['recommended'];
            $i++;
        }
        return $list;
    }
    
    public function recipeWellness(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM recipes WHERE sub_category='Wellness' and status='1'");
        while($row = mysql_fetch_array($search)){
            $list[$i]['recipe_id'] = $row['recipe_id'];
            $list[$i]['title'] = $row['title'];
            $list[$i]['body'] = $row['body'];
            $list[$i]['category'] = $row['category'];
            $list[$i]['sub_category'] = $row['sub_category'];
            $list[$i]['sub_category2'] = $row['sub_category2'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['thumbnail'] = $row['thumbnail'];
            $list[$i]['status'] = $row['status'];
            $list[$i]['created'] = $row['created'];
            $list[$i]['benefits'] = $row['benefits'];
            $list[$i]['overview'] = $row['overview'];
            $list[$i]['ingredients'] = $row['ingredients'];
            $list[$i]['instructions'] = $row['instructions'];
            $list[$i]['recommended'] = $row['recommended'];
            $i++;
        }
        return $list;
    }
    
    public function recipeRecent(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM recipes WHERE status=1 ORDER BY created DESC");
        while($row = mysql_fetch_array($search)){
            $list[$i]['title'] = $row['title'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['id'] = $row['recipe_id'];
            
            $i++;
        }
        return $list;
        
    }
    
    public function recipeRecentNext(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM recipes WHERE status=1 ORDER BY created");
        while($row = mysql_fetch_array($search)){
            $list[$i]['title'] = $row['title'];
            $photo[$i]['photo'] = $row['photo'];
            $i++;
        }
        return $list;
        
    }
}