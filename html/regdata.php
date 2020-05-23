<? php
$db = 'Applicants';
$conn = new mysqli('localhost','root','',$db);
if(mysqli_connect_error()){
die('Connect Error ('.mysqli_connect_error() .')'
	.mysqli_connect_error());
	}
	else{
	if(isset($_REQUEST["submit"]))
	{
		$un = $_REQUEST["name"];
		$un1 = $_REQUEST["email"];
		$un2 = $_REQUEST["phone"];
		$un3 = $_REQUEST["address"];
		$un4 = $_REQUEST["dancestyle"];
		$sql = "INSERT INTO Applicants(name,email,phone,address,dancestyle) values('$un','$un1',$un2,'$un3','$un4')";
		if($conn->query($sql)){

		}
		else{
			echo "Error :".$sql ."<br>".$conn->error;
		}
		$conn->close();
	}
	}
?>