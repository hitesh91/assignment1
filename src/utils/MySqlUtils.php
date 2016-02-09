<?php
include "ConnectionUtils.php";

class MySqlUtils
{

    private $dbConn;
    function __construct()
    {
        $this->dbConn= ConnectionUtils::getDbConnection();
    }
    public function cheackRecord($userName,$password)
    {

        $sql = " select userName,password from table_test where userName='".$userName."' AND password='".$password."' ";
       $ret= mysqli_query($this->dbConn,$sql);

if(mysqli_num_rows($ret)>0)
        {


           // header('location:../Ajax/trial.php');
return true;

        }
        if(mysqli_num_rows($ret)<=0)
        {
            //echo "please enter valid id and password";
       //  header('location:../Public/index.html');
            return false;
        }

    }}
