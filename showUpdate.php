<!-- SELECT Top 10 * FROM myTable ORDER BY DateModified DESC
SELECT LAST_INSERT_ID(); -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ساخت جدول </title>

    <?php include 'Templates/header.php';  ?>
    <div class="show-section">
    <?php
    
        $con=mysqli_connect("localhost","root","");
        if($con)
        {
        	mysqli_select_db($con,"nasrin");
        	$sql="SELECT * FROM products WHERE isupdate=1 ";
        	$r=mysqli_Query($con ,$sql);
        	if(!$r)
        	{
        		die("اخطار در بازیابی اطلاعات".mysqli_connect_error())."<br/>";
        	}
        	echo "<div class='show-tabel-box'><table class='table'><tr><th>کد کالا</th><th>نام کالا</th><th>مدل کالا</th><th>قیمت کالا</th></tr>";
        	while($row=mysqli_fetch_array($r))
        	   {
        		echo "<tr>";
        		echo "<td>".$row["product_code"]."</td>";
        		echo "<td>".$row["product_model"]."</td>";
        		echo "<td>".$row["product_name"]."</td>";
        		echo "<td>".$row["product_price"]."</td>";
        		echo "</tr>";
        		}
        	echo "</table> </div>";
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