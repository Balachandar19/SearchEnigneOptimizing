<?php
$name=$_POST['name'];
$email=$_POST['email'];
$opinion=$_POST['opinion'];
$host="localhost";
$user = 'root';  
$pass = '';  
$dbname = "feedback";
$conn=new mysqLi('localhost','root','','feedback');
if(mysqli_connect_error()){
	die('Connection Failed :'.mysqli_connect_error());
}else{
	$sql="INSERT INTO feedback(name,email,opinion)
	values('$name','$email','$opinion')";
	if($conn->query($sql))
	{
		echo "Thanks for your feedback";
	}
	else
	{
		echo "Error".$sql."<br>".$conn->error;
	}
	$conn->close();
}
?>