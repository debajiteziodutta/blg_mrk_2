<?php include("../connection/db.php");
$btn =  $_POST['btn-name'];
$sty =  $_REQUEST['sty'];
if($btn == "Create")
{
    $up ="UPDATE `btn` SET `creat`='$sty'";
    $result = mysqli_query($conn, $up);  
}
if($btn == "Get Started")
{
    $up ="UPDATE `btn` SET `getstarted`='$sty'";
    $result = mysqli_query($conn, $up);  
}
else{
    $up ="UPDATE `btn` SET `$btn`='$sty'";
    $result = mysqli_query($conn, $up);  
    if(!$result){
        print "<script>alert('Invalid Button Name');</script>";
    }
}
header('Location:comp-buttons.php');
?>