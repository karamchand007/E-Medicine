<html>
	<head>
    
    </head>
    <body class="body">
    	<div class="container-fluid">
        <div class="col-md-10 col-md-offset-1" style="box-shadow:0px 0px 40px #000">
        	<?php include "header.php"; ?>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-6">
                	<div class="panel panel-info">
                    	<div class="panel-heading" align="center">
                        	<h3>Quick Enquiry</h3>
                        </div>
                        <div class="panel-body">
                        	<form method="post" action="contact_action.php">
                            	<label for="">Name *</label>
                                <input type="text" name="t1" pattern="[A-Za-z ]{4,}" class="form-control" placeholder="Plz Enter Name *" required title="Only Letter and White Space Allowed">
                                <label for="">Mobile No. *</label>
                                <input type="text" name="t2" pattern="[0-9]{10}" class="form-control" placeholder="Plz Enter Mobile No. *" required title="Only Numbers allowed..">
                                <label for="">Email ID *</label>
                                <input type="email" name="t3" class="form-control" placeholder="Plz Enter Email ID *" required>
                                <label for="">Message *</label>
                                <textarea placeholder="Plz Enter Message....." class="form-control" name="t4" rows="4" required></textarea><br>
                                <input type="submit" value="Submit" class="btn btn-group-justified btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="panel panel-danger">
                    	<div class="panel-heading" align="center">
                        	<h3>Contact Info</h3>
                        </div>	
                        <div class="panel-body">
                        <div class="col-md-8 col-md-offset-2">
                        	<img src="img/pd.jpg" class="img-responsive"><br>
                            <p><strong>Name :- </strong>Satyendra Kumar Singh</p>
                            <p><strong>Email ID :- </strong>sonu.singh.rautia007@gmail.com</p>
                            <p><strong>Mobile No. :- </strong>7979079503</p>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-8 col-md-offset-2">
                	<img src="img/map.PNG" class="img-responsive">
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
        </div>
    </body>
</html>