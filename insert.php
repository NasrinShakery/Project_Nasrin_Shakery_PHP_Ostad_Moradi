
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ارسال اطلاعات به جدول </title>

    <?php include 'Templates/header.php';  ?>


    <div class="insert-section">

		<?php
			$con=mysqli_connect("localhost","root","");
			if($con)
			{
				$code=$_POST["pCode"];
				$name=$_POST["pName"];
				$model=$_POST["pModel"];
				$price=$_POST["pPrice"];
				$isUpdate = 0;

				if(($code=="")||($name=="")||($model=="")||($price==""))
				{
					echo "<p class = 'red-alert'>لطفا مقادیر را پر کنید!</p>";
					die ("<a href='input.html' class='btn'>بازگشت به فرم ورود اطلاعات کالا </a>"."<br />");
				}

				mysqli_select_db($con,"nasrin");

				$sql="INSERT INTO products(product_code, product_model, product_name, product_price, isupdate) VALUES($code,'$name','$model','$price', '$isUpdate')";
				$r=mysqli_Query($con ,$sql);

				if($r)
				{
					echo"<div class='green-alert'>اطلاعات ثبت شد</div>"."<br />";
				}else{
    		        echo"<div class='red-alert'>اطلاعات ثبت نشد</div>"."<br />";
				}

				mysqli_close($con);
			}
			else{
				echo("اتصال برقرار نشد".mysqli_connect_error());
			}

    		echo "<br /><a class='btn' href='home.html'>برگشت به صفحه اصلی</a><br/>";
		?>

	</div>





    <?php include 'Templates/footer.php'; ?>

</html>