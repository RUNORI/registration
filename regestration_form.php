<?php
$servername='localhost';
$username='root';
$password='';
$database_name='real';
$con=mysqli_connect($servername,$username,$password,$database_name);


//if(!$con){

	//die("Connection failed:" .mysqli_connect_error());
//}

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";
}


if(isset($_POST['submit'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$Roll_no = $_POST['Roll_no'];
$branch = $_POST['branch'];
$Semester = $_POST['Semester'];
$email_id = $_POST['email_id'];
$phone_no = $_POST['phone_no'];


$sql = "INSERT INTO regestration_form(first_name,last_name,Roll_no,branch,Semester,email_id,phone_no) VALUES ('$first_name','$last_name','$Roll_no','$branch','$Semester','$email_id','$phone_no')";

if ($con->query($sql) === TRUE) {
  echo "Registered successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

}



/*
//$sql_query = "INSERT INTO regestration_form (first_name,last_name,Roll_no,branch,Semester,email_id,phone_no) VALUES //($first_name,$last_name,$Roll_no,$branch,$Semester,$email_id,$phone_no)";

$sql_query = "INSERT INTO regestration_form(first_name,last_name,Roll_no,branch,Semester,email_id,phone_no) VALUES ($first_name,$last_name,$Roll_no,$branch,$Semester,$email_id,$phone_no)";  

echo $sql_query ;

$output = mysqli_query($con,$sql_query);

echo mysqli_query($con,$sql_query);

if ($output ){
	
	echo "Registered successfully!";
}
else{
	echo "Error" ;
}
mysqli_close($con);

}

*/
?>