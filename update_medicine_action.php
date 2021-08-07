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
            	<div class="col-md-8 col-md-offset-2">
                	<div class="panel panel-info">
                    	<div class="panel-heading">
                        	<p>Update Medicine</p>
                        </div>
                        <div class="panel-body">
                        <?php
							require "dbconnect.php";
							$a=$_REQUEST['t1'];
							$q="select *from medicine where sl='$a'";
							$qu=mysql_query($q);
							$rs=mysql_fetch_assoc($qu);
						?>
                        	<form method="post">
                            	<table class="table">
                                	<tr>
                                    	<th>Name</th>
                                        <td><input type="text" name="t1" class="form-control" value="<?php echo $rs['name']; ?>"></td>
                                    </tr>
                                    <tr>
                                    	<th>Price</th>
                                        <td><input type="text" name="t2" class="form-control" value="<?php echo $rs['price']; ?>"></td>
                                    </tr>
                                    <tr>
                                    	<th>Type</th>
                                        <td><input type="text" name="t3" class="form-control" value="<?php echo $rs['type']; ?>"></td>
                                    </tr>
                                    <tr>
                                    	<th colspan="2"><input type="submit" value="Confirm" class="btn btn-group-justified btn-success">
                                    </tr>
                                </table>
                            </form>
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