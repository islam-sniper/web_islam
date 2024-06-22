<?php
session_start();
if(!empty($_REQUEST["gmail"]) && !empty($_REQUEST["password"]) ){
    require_once('classs.php');
    $user= User::login($_REQUEST["gmail"],md5($_REQUEST["password"]));
    // try {
    //     User::login($_REQUEST["gmail"],md5($_REQUEST["password"]));
    // } catch (\Throwable $th) {
    //     header("location:register.php?msg=ar");
    // }

        if (!empty($user)) {
            $_SESSION["user"] = serialize($user); 
            if ($user->role =="admin") {
                header("location:frontend/admins/home.php");
            }elseif ($user->role =="subscriber") {
                header("location:frontend/subscriber/home.php");
            }


        }else{
        header("location:index.php?msg=no_user");
        }
    
}else{
    header("location:index.php?msg=empty_fild");
}