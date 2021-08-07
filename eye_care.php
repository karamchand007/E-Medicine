<html>
	<head>
    
    </head>
    <body class="body">
    	<div class="container-fluid">
        <div class="col-md-10 col-md-offset-1" style="box-shadow:0px 0px 40px #000">
        	<?php include "header.php"; ?>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-12">
                	<div class="panel panel-info">
                    	<div class="panel-heading" align="center">
                        	<h3>Medicine of Eye care</h3>
                        </div>
                        <div class="panel-body">
                        	<?php include "dbconnect.php"; 
								$q="select *from medicine where type='Eye Care'";
								$qu=mysql_query($q);
								while($rs=mysql_fetch_assoc($qu))
								{?>
                                <form method="post" action="order_now.php">
                             		
                                	<div class="col-md-2" align="center">
                                    <input type="text" name="t1" value="<?php echo $rs['name']; ?>" style="display:none">
                                    	<?php echo '<img src="product/'.$rs['img'].'" style="width:100%; height:130px"">'; ?><br> <b>Price <?php echo $rs['price']; ?>/-</b> 
                                        <div class="col-md-12" style="background:#F00" align="center">
                                        <input type="submit" value="Order Now" class="btn btn-link">
                                    </div>
                                    </div>
                                    </form>
                                <?php }
							?>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
        </div>
    </body>
</html>