<?php
$server='localhost';
$username='root';
$password='';
$dbname='test';


$con=mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo"not connected";

}
else{
    echo "connected";
}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$service=$_POST['service'];
$massage=$_POST['massage'];

$sql="INSERT INTO `Registation`(`name`, `email`, `phone`, `service`, `massage`) VALUES ($name','$email','$phone','$service','$massage')";
$result=mysqli_query($con, $sql);
if($result){
    echo 'data save';
}
else{
    echo 'data error';
}
?>