
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ساخت جدول </title>

    <?php include 'Templates/header.php';  ?>

    <?php
      
        // $con=mysqli_connect("localhost", "root","","nasrin");
        require_once("./config/db_connect.php");
        if($con)
	    {
	    	mysqli_select_db( $con, "nasrin");
            $sql="CREATE TABLE products(
            product_code INT,
            product_name VARCHAR(20),
            product_model VARCHAR(20),
            product_price INT,
            isupdate boolean
            )";

            if  (mysqli_Query($con , $sql))
            {
	    	    echo"<div class='green-alert'>جدول ايجاد شد</div>"."<br />";
            }
            else{
                echo"<div class='green-alert'>جدول ايجاد نشد</div>"."<br />".mysqli_error($con);
            }

	        mysqli_close($con);
	    }
	    else{
            echo "<p class = 'red-alert'>اتصال برقرار نشد</p>";
	        die (mysqli_connect_error());
	    }

        echo "<br /><a class='btn' href='home.html'>برگشت به صفحه اصلی</a><br/>";
    ?>

    <?php include 'Templates/footer.php'; ?>

</html>