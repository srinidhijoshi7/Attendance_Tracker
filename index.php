<?php

include ("header.php");

?>

<?php
date_default_timezone_set("Asia/Kolkata");


$date = date('m/d/Y h:i:s a', time());
echo $date;


?>
<p style="background-image: url('img1.jpg');">
<div class="container-fluid jumbo">
 <h1 class="text-center">ATTENDANCE TRACKER</h1>
 <div class="mb-2">
 </div>
  <br>
  <br>
 <div class="container-fluid mx-auto">
 <div class="rows">
 
  <div class="col-sm-6 color_white col-sm-6-mod">
    <h3 class="text-center">Admin Dashboard</h3>
	<br>
  
  <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg1">Admin Space</button></a>

    
</div>
  <div class="col-sm-6 color_white col-sm-6-mod">
   <h3 class="text-center">Student Dashboard</h3>
	<br>
    <a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg1">Student Space</button></a>
	 
  </div>
  
 </div>
 
 </div>
   
</div>



<?php

include ("footer.php"); 

?>