
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ارسال اطلاعات به جدول </title>

    <?php include 'Templates/header.php';  ?>


    <div class="delet-section">

        <?php
            require_once("./config/db_connect.php");

	        $deletCode=$_POST["deletCode"];
	    	if($deletCode=="")
	        {
	        	echo "<p class = 'red-alert'>لطفا کد کالا را وارد نمایید!</p>";
                die("<br /><a class='btn' href='home.html'>بازگشت به فرم ورود اطلاعات کالا </a>"."<br/>");
	        }

	        mysqli_select_db($con,"nasrin");
	        $sql="DELETE FROM products WHERE product_code=$deletCode";
	        $r=mysqli_Query($con ,$sql);
	        if($r)
	        {
            
                echo"<div class='green-alert'>کالای با شماره ".$deletCode." حذف شد"."</div>"."<br />";
            
	        }
             else{
	        
                echo"<div class='red-alert'>اخطار  در دستورات حذف اطلاعات</div>"."<br />";
	        }
	        mysqli_close($con);


            echo "<br /><a class='btn' href='home.html'>برگشت به صفحه اصلی</a><br/>";	
        
        ?>

    </div>



    <?php include 'Templates/footer.php'; ?>

</html>