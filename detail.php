<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<p> Tất cả sản phẩm </p>
	<div class="product">
		<?php
		// Khai bao ket noi toi CSDL dung mysqli_connect
		$connect = mysqli_connect('localhost','root','','online_shopping');
		if(!$connect){
			echo "Kết nối thất bại";
		}
		//Khai bao truy van toi CSDL
		//O day la lay toan bo data tu bang product
		$sql="SELECT * FROM product";
		// Thuc thi truy van
		// Ket qua tra ve la doi tuong mysqli_result
		$result = mysqli_query($connect,$sql);
		// Chuyen doi tuong mysqli_result ve mang co the thao tac duoc
		// Mang o day la mang key => value
		while($row = mysqli_fetch_array($result)){
			?>
			<div class="single-product">
				<h3 > <?php echo $row['product_name'] ?> </h3>
				<img src="img/<?php echo $row['product_image'] ?>" width="180px" height="180px">
				<p> <b> Giá tiền: <?php echo $row['product_price'] ?> </b> </p>
				<a href="detail.php?id=<?php echo $row['product_id'] ?> "> Chi tiết</a>
			</div>
			<?php
		}
		?>

</body>
</html>