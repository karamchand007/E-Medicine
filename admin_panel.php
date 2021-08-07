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