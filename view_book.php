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
                <table class="table table-bordered">
                            <tr>
                            	<th>Name</th>
                                <th>Mobile No.</th>
                                <th>Medicine</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                            </tr>
                	<?php
						include "dbconnect.php";
						$a="select *from book";
						$b=mysql_query($a);
						while($c=mysql_fetch_assoc($b))
						{
							?>
                            <tr>
                            	<td><?php echo $c['name']; ?></td>
                                <td><?php echo $c['phone']; ?></td>
                                <td><?php echo $c['medicine']; ?></td>
                                <td><?php echo $c['quantity']; ?></td>
                                <td><?php echo $c['amount']; ?></td>
                            </tr>
                            
                            <?php
						}
					?>
                    </table>
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