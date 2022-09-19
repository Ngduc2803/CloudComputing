<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.form{
			width: 400px;
			height: 450px;
			border: 1px solid grey;
			border-radius: 10px;
			text-align: center;
			margin: auto;

		}
		.form{
			background-color: #D3D3D3;
			margin-top: 20px;
			opacity: 90%;

		}
		.input{
			width: 300px;
			height: 40px;
			margin-bottom: 10px;
			border-radius: 5px;
			border: 1px solid ;

		}
		.button{
			width: 200px;
			height: 40px;
			margin-top: 20px;
			border-radius: 5px;
			border: none;
			background-color: #DC143C ;
			font-family:Cambria;
			font-size: 23px;
			
		}
		.button:hover{
			font-size: 21px;
			background-color: red 
			 
		}
		.regist: hover{
			background-color:#FFA500 ;
		}

		
	</style>
</head>
<body style="font-size:20px;background-image: url('https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg'); font-family:Cambria;">

	
	<?php
	$connect =	mysqli_connect('localhost','root','','musicwebsite');
	if($connect){
		echo"";
	}
	else{
		echo "kết nối thất bại ";
	}
	?>

    <b><p style="text-align: center; color: whitesmoke; font-size: 120px;margin-top: 25px;height: 60px;">STEAKOVERFLOW</p></b>
	<div >
	<form action="" method="post" class="form" >
		<h2 style="font-family:Cambria;">MEMBER LOGIN</h2>
		<input class="input" type="text" name="username" required placeholder="=> Username"><br>
		<input class="input" type="password" name="password" required placeholder="=> Password"><br>
		<input class="button" type="submit" name="login" value="login"></a>
		<h5 style="margin-top: 40px;"> GET YOUR OWN ACCOUNT ? </h5>
		<a class="regist" href="http://localhost:8085/onlineshopping/register.php">REGISTER HERE</a>

	</form>
</div>


<?php 
if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connect,$sql);
$num_rows = mysqli_num_rows($result);
if ($num_rows ==0) {
	echo "username password is incorrect";
}
else
{
	?>
		<script>
			alert("Login success");
			window.location.href = "music.html";
		</script>
	<?php
}
}
?>

</body>
</html>