<?php session_start();
if(!empty($_SESSION['log']))
{
	?>
    <html>
	<head>
    
    </head>
    <body class="body">
    	<div class="container-fluid">
        <div class="col-md-10 col-md-offset-1" style="box-shadow:0px 0px 40px #000">
        	<?php include "header1.php"; ?>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-6 col-md-offset-3">
                	<div class="panel panel-info">
                    	<div class="panel-heading">
                        	<p>Add Medicine Details</p>
                        </div>
                        <div class="panel-body">
                        	<?php
							include "dbconnect.php";
							$a=$_REQUEST['t1'];
							$b=$_REQUEST['t2'];
							$b1=$_REQUEST['t0'];
							$b2=$_REQUEST['t21'];
							$c=$_FILES['t3']['name'];
							$c1=$_FILES['t3']['tmp_name'];
							$q="insert into medicine(name,price,quan,type,img) values('$a','$b','$b2','$b1','$c')";
							mysql_query($q);
							
							$qu=move_uploaded_file($c1,"product/".$c);
							
							?>
                            <h2 style="color:#F00;">Data Uploaded Successfully....</h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
        </div>
    </body>
</html>
    <?php
}
else
{
	header("location:index.php");
}
?>