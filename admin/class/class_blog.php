<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Blog{
    var $blog_id,$title,$body,$photo,$thumbnail,$category,$sub_category,$status,$created;
    
    public function __construct() {
        $db = new DB_Class();
    }
    
    public function blogAdd(){
        $insert = mysql_query("INSERT INTO blogs (title,body,category,sub_category,photo,thumbnail)"
                . "VALUES ('$this->title','$this->body','$this->category','$this->sub_category','$this->photo','$this->thumbnail')");
        $_SESSION['blog_success'] = "You successfully added new blog";
        if(!$insert) die ("An error occur during an update to the profile.". mysql_error() );
        header("Location:index.php");
    }
    
    public function blogList(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM blogs");
        while($row = mysql_fetch_array($search)){
            $list[$i]['blog_id'] = $row['blog_id'];
            $list[$i]['title'] = $row['title'];
            $list[$i]['body'] = $row['body'];
            $list[$i]['category'] = $row['category'];
            $list[$i]['sub_category'] = $row['sub_category'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['thumbnail'] = $row['thumbnail'];
            $list[$i]['status'] = $row['status'];
            $list[$i]['created'] = $row['created'];
            $i++;
        }
        return $list;
    }
    
    public function blogEdit($id){
        $update = mysql_query("UPDATE blogs SET title='$this->title',body='$this->body',category='$this->category',"
                . "sub_category='$this->sub_category',photo='$this->photo',thumbnail='$this->thumbnail' WHERE blog_id='$id'");
        $_SESSION['blog_success']='You successfully update your blog';
        header("Location: index.php");
        //if(!$update) die ("An error occur during an update to the profile.". mysql_error() );
        
    }
    
    public function blogView($id){
        
        $search = mysql_query("SELECT * FROM blogs WHERE blog_id='$id'");
        while($row = mysql_fetch_array($search)){
            $this->blog_id= $row['blog_id'];
            $this->title = $row['title'];
            $this->body = $row['body'];
            $this->category = $row['category'];
            $this->sub_category = $row['sub_category'];
            $this->photo = $row['photo'];
            $this->thumbnail = $row['thumbnail'];
            $this->status = $row['status'];
            $this->created = $row['created'];            
        }
        
    }
    
    public function blogActivate($id){
        $update = mysql_query("UPDATE blogs SET status=1 WHERE blog_id='$id'");
        $_SESSION['blog_success']="You activated the blog";
        header("Location: index.php");
    }
    public function blogDeactivate($id){
        $update = mysql_query("UPDATE blogs SET status=0 WHERE blog_id='$id'");
        $_SESSION['blog_success']="You deactivated the blog";
        header("Location: index.php");
    }
    
    public function blogDelete($id){
        $delete = mysql_query("DELETE FROM blogs WHERE blog_id='$id'");
        $_SESSION['blog_success']='You deleted ther blog';
        header("Location: index.php");
    }
}