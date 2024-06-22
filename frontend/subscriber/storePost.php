<?php
session_start();
if (!empty($_REQUEST["title"]) && !empty($_REQUEST["content"]) ) {
    
    $user = unserialize($_SESSION["user"]) ;
    move_uploaded_file($_FILES["img"]["tmp_name"],"../../imges/post/".$_FILES["img"]["name"]);

}else{
    header("location:profile.php?msg=required fields");
}