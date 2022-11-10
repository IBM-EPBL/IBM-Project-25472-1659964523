<?php

include ("connect.php");

$username = $_POST['Username'];
$password = $_POST['Password'];

$sql = "select * from `login` where username='$username'";

$rs = mysqli_query($con, $sql);

$totalitems = mysqli_num_rows($rs);

if($totalitems > 0)
{
    while($row = mysqli_fetch_assoc($rs)) {
        $username1=$row['username'];

        if($username==$username1) {
            include ("form.html");
        }
        
    }
}

?>