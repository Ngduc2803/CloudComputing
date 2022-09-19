<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.form{
			width: 500px;
			height: 500px;
			border: 1px solid black;
			border-radius: 7px;
			text-align: center;
			display: block  ;
			margin: auto;
		}
		.form{
			background-color:	#D3D3D3 ;
			margin-top: 100px;
			opacity: 90%;
		}
			.input{
			width: 250px;
			height: 40px;
			margin-bottom: 10px;
			border-radius: 5px;
			border: 1px solid ;
			margin-left: 20px;
		}
			.button{
			width: 200px;
			height: 40px;
			margin-top: 40px;
			border-radius: 5px;
			border: none;
			background-color: #DC143C    ;
			font-family:Cambria;
			font-size: 23px;
			
		}
		.button:hover{
			background-color: red ;
			font-size: 21px;
		}
	</style>
</head>
<body  style="font-size: 20px; font-family:Cambria; background-image: url('https://phuongphap.vn/wp-content/uploads/2021/04/nghe-thuat-chup-anh-mon-an-loi-cuon-06.jpg');">
	<form method="POST" enctype="multipart/form-data" class="form">
			<h2 style="font-family:Cambria;">ADD PRODUCT</h2>
		<table  style="margin-left: 35px ;">
			<tr>
				<td> Product Id  </td>
				<td><input type="text" name="product_id" class="input"></td>
			</tr>
			<tr>
				<td> Product Name </td>
				<td><input type="text" name="product_name" class="input"></td>
			</tr>
			<tr>
				<td> Product Image </td>
				<td><input type="file" name="product_image" class="input"></td>
			</tr>
			<tr>
				<td> Product Price </td>
				<td><input type="text" name="product_price" class="input"></td>
			</tr>
		</table>	
				<input type="submit" name="add" value="ADD" class="button">
					
		
		
	
	</form>
	<?php
	$connect =	mysqli_connect('localhost','root','','online_shopping');
	if($connect){
		
	}
	else{
		echo "kết nối thất bại ";
	}
	if(isset($_POST['add'])){

		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
	    move_uploaded_file($product_image_tmp, "img/$product_image");
		$product_price = $_POST['product_price'];
		$sql = "INSERT INTO product VALUES('$product_id','$product_name','$product_image', '$product_price')";
		$result = mysqli_query($connect,$sql);
		if($result){
		echo "ADD SUCESSFULLY";
		?>

	    <?php
		}

		else{
			echo "Fail ";
		}


	}
	?>
	<p style="color: whitesmoke;">ADD SUCESSFULLY</p>


</body>
</html>