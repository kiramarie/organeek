<?php

/* 
 * Admin functions
 * by: Hanna
 * not intended for dimple :p
 */

session_start();
Class Admin{
    var $admin_id,$username,$password,$repassword;
    
    public function __construct() {
        $db = new DB_Class();
    }
    
    public function adminAddUser(){
        $check=$this->checkPassword($this->password,$this->repassword);
        if(!$check){
            $_SESSION['password_error']="Please make sure you type same password";
            $_SESSION['add_username'] = $this->username;            
            header("Location: register.php");
        }else{
            unset($_SESSION['password_error']);
            unset($_SESSION['add_username']);
            $now = date('Y-m-d H:i:s');            
            $pw = md5($this->password);
            $insert = mysql_query("INSERT INTO admin (username,password) VALUES ('$this->username','$pw')");
            if(!$insert) die ("An error occur during an update to the profile.". mysql_error() );
            $_SESSION['admin_login']='You successfully added a new admin user';
            header("Location: index.php");
        }     
    }
    
    public function checkPassword($pass,$pass2){
        if($pass!=$pass2)
            return false;
        else
            return true;
    }
    
    public function adminLogin(){
        $pw = md5($this->password);
        $check = mysql_query("SELECT * FROM admin WHERE username='$this->username' AND password = '$pw' AND status='1'");
        $count = mysql_num_rows($check);
        if($count>=1){
            while($row = mysql_fetch_array($check)){
                $adminId = $row['admin_id'];
                $this->admin_id=$adminId;
            }
            $_SESSION['admin_login']='Welcome back '.$this->username;
            $_SESSION['admin_id']=$this->admin_id;
            $_SESSION['username']=$this->username;
            header("Location: index.php");
        }else{
            $_SESSION['admin_login']='An Error Occur. Please check if you type the correct username and password';
            if(!$check) die ("An error occur during an update to the profile.". mysql_error() );
            header("Location: login.php");
        }
    }
    
    public function adminUsers(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM admin");
        while($row = mysql_fetch_array($search)){
            $list[$i]['username'] = $row['username'];
            $list[$i]['active'] = $row['active'];
            $list[$i]['id'] = $row['id'];
            $list[$i]['created'] =$row['created'];
            $i++;
        }
        return $list;
    }
}