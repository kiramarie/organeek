<?php
Class Blog{
    var $blog_id,$title,$body,$photo,$thumbnail,$category,$sub_category;
    
    public function __construct() {
        $db = new DB_Class();
    }
    
    public function blogAdd(){
        $insert = mysql_query("INSERT INTO blogs (title,body,category,sub_category,photo,thumbnail)"
                . "VALUES ('$this->title','$this->body','$this->category','$this->sub_category','$this->photo','$this->thumbnail')");
        $_SESSION['blog_success'] = "You successfully added new blog";
        header("Location:index.php");
    }
    
    public function blogList(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM blogs WHERE status=1");
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
    
    public function blogData($id){
        $search = mysql_query("SELECT * FROM blogs WHERE blog_id='$id' AND status=1");
        while($row = mysql_fetch_array($search)){
            $this->blog_id = $row['blog_id'];
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
}