<?php

$firstname=filter_input(INPUT_POST,'fname');
$middlename=filter_input(INPUT_POST,'Mname');
$lastname=filter_input(INPUT_POST,'lname');
$email=filter_input(INPUT_POST,'email');
$contact=filter_input(INPUT_POST,'contact');
$danceform=filter_input(INPUT_POST,'dance');
$noofstud=filter_input(INPUT_POST,'students');
if(!empty($firstname)){
if(!empty($lastname)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="nachadedance";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
else{
	$sql="INSERT INTO register(Fname,Mname,Lname,Email,Contact,Dancform,intersetd)
	values($firstname,$middlename,$lastname,$email,$contact,$danceform,$noofstud)";
if($conn->query($sql){
echo " Registered the details";
}
else{
echo"Error".$sql."<br>".$conn->error;
}
}
}
else{
	echo"!!Field can't be empty";
	die();
	}

?>