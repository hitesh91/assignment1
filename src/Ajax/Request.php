<?php
include "../utils/MySqlUtils.php";

$action=$_REQUEST["action"];
$userName=$_REQUEST["userName"];
$password=$_REQUEST["password"];
$MySqlUtilsObj=new MySqlUtils();
switch($action) {
    case 'cheack':
        $MySqlUtilsObj->cheackRecord($userName, $password);
if($MySqlUtilsObj->cheackRecord($userName,$password)==true)
{


    session_start();
    $_SESSION["user"]=$userName;
    $_SESSION["pass"]=$password;
    header('location:../Ajax/trial.php');
}
    else{
        header('location:../Public/index.html');
    }
}
  //      if($status==true)
      //  {

   //    header('location:trial.php');
//}
   //    else{
    //header('location:hh.php');

