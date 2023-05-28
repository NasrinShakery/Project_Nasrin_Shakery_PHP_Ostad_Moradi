
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نمایش اطلاعات جستجو شده</title>

    <?php include 'Templates/header.php';  ?>

    <div class="show-search-result">
        <?php
            $con=mysqli_connect("localhost","root","");

            if($con)
            {
            	$search=$_POST["search"];
            	$kala=$_POST["product-txt"];
            	if($kala=="")
            	{
            	    echo "<p class = 'red-alert'> لطفا مشخصات کالا را وارد نمایید.</p>";
            	    die ( "<a href='search.html' class='btn'>بازگشت به فرم جستجو </a>"."<br />");
                }
                mysqli_select_db($con,"nasrin");
                $sql="SELECT * FROM products WHERE";
                switch($search){
                	case 1:$sql=$sql." product_code=$kala ";break;
                	case 2:$sql=$sql." product_name LIKE '%$kala%' ";break;
                	case 3:$sql=$sql." product_model LIKE='%$kala%' ";break;
                	case 4:$sql=$sql." product_price=$kala ";break;
                }
                $r=mysqli_Query($con ,$sql);
                if(!$r)
                {
                	die("خطا در بازیابی اطلاعات".mysqli_connect_error())."<br/>";
                }
                echo "<table class='table'><tr><th>کد کالا</th><th>نام کالا</th><th>مدل کالا</th><th>قیمت کالا</th></tr>";
                while($row=mysqli_fetch_array($r))
                {
                	echo "<tr>";
                	echo "<td>".$row["product_code"]."</td>";
                	echo "<td>".$row["product_name"]."</td>";
                	echo "<td>".$row["product_model"]."</td>";
                	echo "<td>".$row["product_price"]."</td>";
                	echo "</tr>";
                }
            	echo "</table>";

            	mysqli_close($con);
            }
            else{
                echo "<br /><a class='btn' href='home.html'>برگشت به صفحه اصلی</a><br/>";	
                die(" <p class = 'red-alert'>اتصال برقرار نشد</p>".mysqli_connect_error());
            }
            echo "<br /><a class='btn' href='home.html'>برگشت به صفحه اصلی</a><br/>";	
        ?>
    </div>

    <?php include 'Templates/footer.php'; ?>

</html>