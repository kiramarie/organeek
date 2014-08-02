<?php

/* 
 * Comments
 * by: Hanna
 * 
 */

Class Comment{
    var $comment_id,$name,$email_add,$website,$comment;
    
    public function __construct() {
        $db = new DB_Class();
    }
    
    public function commentAdd($type,$recipeId){
        $insert = mysql_query("INSERT INTO comments (name,email_add,website,comment,pages)"
                . "VALUES ('$this->name','$this->email_add','$this->website','$this->comment','$type')");
        $_SESSION['comment_success'] = "You successfully added new comment";
        header("Location: recipe-single.php?id=".$recipeId);
    }
}

