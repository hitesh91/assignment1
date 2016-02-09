
<?php
include"Request.php";
session_start();
if($_SESSION["user"]==null && $_SESSION["pass"]==null)
{
    header('location:../Public/index.html');
}



?>


    <html >

<head >


    <link href = "../css/dropzone.css" type = "text/css" rel = "stylesheet" />

    <script src = "../css/Dropzone.min.js" ></script >

</head >

<body >

<input type = "submit" value = "Logout" >
<form action = "../upload.php" class="dropzone" ></form >

</body >

</html >

