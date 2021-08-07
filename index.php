<html>
	<head>
    
    </head>
    <body class="body">
    	<div class="container-fluid">
        <div class="col-md-10 col-md-offset-1" style="box-shadow:0px 0px 40px #000">
        	<?php include "header.php"; ?>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-8">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/m4.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/m2.jpg"style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/m1.jpg" style="width:100%;">
      </div>
      <div class="item">
        <img src="img/m3.jpg" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
                </div>
                <div class="col-md-4" style="padding-top:0px">
                	<div class="panel panel-danger">
                    	<div class="panel-heading">
                        	<p><b>Choose Category</b></p>
                        </div>
                        <div class="panel-body">
                        	<ul>
                            	<li><a href="pain.php">Pain</a></li>
                                <li><a href="skin_care.php">Skin Care</a></li>
                                <li><a href="eye_care.php">Eye Care</a></li>
                                <li><a href="worm.php">Worm</a></li>
                                <li><a href="depression.php">Depression</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="panel panel-success">
                    	<div class="panel-heading">
                        	<p><b>Latest Medicine & Offers</b></p>
                        </div>
                        <div class="panel-body" style="height:115px">
                        	<marquee direction="up" scrollamount="3" height="100%">
                            	<p>20% of all Vitamin Medicine for New Customers</p> 
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row" style="padding-top:10px">
            	<div class="col-md-12">
                	<div class="panel panel-success">
                    	<div class="panel-heading">
                        	<h3>Featured Product</h3>
                        </div>
                        <div class="panel-body">
                        <?php include "dbconnect.php"; 
								$q="select *from medicine";
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