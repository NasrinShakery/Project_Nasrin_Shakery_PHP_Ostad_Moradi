<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصال و ساخت پایگاه داده</title>

    <?php include 'Templates/header.php';  ?>

    <?php
        $con=mysqli_connect("localhost","root","");
        if($con){
	    	echo"<div class='green-alert'>اتصال برقرار شد</div>"."<br />";
            $sql="CREATE DATABASE nasrin";
	        $r=mysqli_query($con,$sql);
            
            // if(!$r){
            //     echo "<div class='red-alert'>  جدول از قبل وجود دارد </div>"."<br />";	 
            // }
	    	if($r)
	    	{
                echo"<div class='green-alert'> بانک اطلاعاتی ایجاد شد </div>"."<br />";	 
	    	}
            else
	    	{
                echo"<div class='red-alert'> بانک اطلاعاتی ایجاد نشد </div>"."<br />";	 
	    	}
            mysqli_close($con);   
	    }
	    else{
            echo "<p class = 'red-alert'>اتصال برقرار نشد</p>";
	    	die(mysqli_connect_error());
	    }    
         
        echo "<br /><a class='btn' href='home.html'>برگشت به صفحه اصلی</a><br/>";
    ?>
    
    <?php include 'Templates/footer.php'; ?>

</html>