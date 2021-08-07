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
                        	<form method="post" action="update_medicine_action.php">
                            	<table class="table">
                                	<tr>
                                    	<th>Medicine Name</th>
                                        <th>Price</th>
                                        <th>Medicine Type</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
										include "dbconnect.php";
										$e="select *from medicine";
										$e1=mysql_query($e);
										while($e2=mysql_fetch_assoc($e1))
										{
											?>
                                            	<tr>
                                                	<td><?php echo $e2['name']; ?></td>
                                                    <td><?php echo $e2['price']; ?></td>
                                                    <td><?php echo $e2['type']; ?></td>
                                                    <td style="display:none;"><input type="text" name="t1" value="<?php echo $e2['sl']; ?>"></td>
                                                    <td><input type="submit" value="Update" class="btn btn-danger">
                                                </tr>
                                            <?php
										}
									?>
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