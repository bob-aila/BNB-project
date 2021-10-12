<?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: #393939;">
    <div class="container-fluid">
	<div class="col-sm-4 hov">
		<img src="logo/logo2.png"width="200px"height="50px"/><br><br>
    <p class="text-justify">Benefits of choosing an Airbnb over a hotel include generally cheaper costs (especially for larger groups), having your own space (such as a kitchen and other living spaces), and often a more personal experience of the area you are staying in. 

Still, hotels offer many benefits including turn-down service, around-the-clock service, and a centralized location for tourism. Because hotels are more regulated, some guests may prefer paying a higher price for the additional services. 

Regardless of which you choose, checking prices and options in your desired location can help you decide which kind of experience you would like for your lodging.</p><br>
      <center><a href="about.php" class="btn btn-danger"><b>Read More..</b></a></center><br><br><br>
 <?php
  include('Social ican.php')
?>
	</div>&nbsp;&nbsp;
	<div class="col-sm-4 text-justify">
	       <h3 style="color:#cdd51f;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>Privatebag Maseno</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>bobphilip93@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>+254 795921 251</p><br><br><br>
     <center><img src="image/devlop/img2.png"class="img-responsive"style="width:200px;height:150px;border-radius:100%;"></center>
	</div>&nbsp;

  <!--Feedback Start Here-->
	<div class="col-sm-4 text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">Feedback</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
      <div class="feedback">
      <form method="post"><br>
        <div class="form-group">
          <input type="text" name="n" class="form-control" id="#"placeholder="Enter Your Name"required>
        </div>
        <div class="form-group">
          <input type="Email" name="e" class="form-control" id="#"placeholder="Email"required>
        </div>
        <div class="form-group">
          <input type="Number" name="mob" class="form-control" id="#"placeholder="Mobile Number"required>
        </div>
        <div class="form-group">
          <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Type Your Massage"required></textarea>
        </div>
          <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
      </form>     
        </div>
       </div>
      </div>
    </div>

    <!--Feedback Panel Close here-->

  </div>
</footer>
<!--Footer1 Close Here-->

<!--Footer2 start Here-->

<footer class="container-fluid text-center"style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
  <p>bobphilip93@gmail.com 2020 Project</p>
</footer>

<!--Footer2 start Here-->