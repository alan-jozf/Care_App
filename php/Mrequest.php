<?php
#include("Db_connection.php");
$con = mysqli_connect("localhost","root","","care_app")or die("failed");
$cbox = $_POST['cbox'];
$Urgency = $_POST['Urgency'];

session_start();
$tmpid=$_SESSION['id'];
// echo $cbox,$Urgency,$tmpid;
$sql = "insert into mrequest(L_id,Reason,Urgency) values($tmpid,'$cbox','$Urgency')";


if(mysqli_query($con,$sql)){
    header("location:..\Home.php");
    echo '<h3>Request Succesfull</h3>';
}
else{
    header("location:..\MedicalRequest.php");
    echo '<h3>Some error occured..!</h3>';
}
?>
