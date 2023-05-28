
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش و ارسال اطلاعات به جدول </title>

    <?php include 'Templates/header.php';  ?>


    <div class="update-section">

		<?php
    		$con=mysqli_connect("localhost","root","");
    		if($con)
    		{
    			$code=$_POST["pCode"];
    	        $name=$_POST["pName"];
    	        $model=$_POST["pModel"];
    	        $price=$_POST["pPrice"];
				$isUpdate = 1;

    			if(($code=="")||($name=="")||($model=="")||($price==""))
    			{
					echo"<p class = 'red-alert'>لطفا مقادیر را پر کنید!</p>";
    				die ( "<a href='update.html' class='btn'>بازگشت به فرم ورود اطلاعات کالا </a>"."<br />");
    			}
    		    mysqli_select_db($con,"nasrin");
    			$sql="UPDATE products SET  product_name = '$name', product_model = '$model' , product_price = '$price', isupdate = '$isUpdate' WHERE product_code = '$code' ";
    			$r=mysqli_Query($con,$sql);
    			if($r)
    			{
    				echo"<div class='green-alert'>اطلاعات ویرایش شد</div>"."<br />";
    		    }
    			else{
    				echo"<div class='red-alert'>اطلاعات ویرایش نشد</div>"."<br />";
    			}
    			mysqli_close($con);
    		}
    		else{
    			die("اتصال برقرار نشد".mysqli_connect_error());
    		}

    	    echo "<br /><a class='btn' href='home.html'>برگشت به صفحه اصلی</a><br/>";	
		
    	?>

	</div>


<?php include 'Templates/footer.php'; ?>

</html>