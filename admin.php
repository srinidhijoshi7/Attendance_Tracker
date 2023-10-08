<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>


<div class="col-sm-12">
   <h1 class="text-center" >ADMIN PANEL</h1>
</div>

<div class="col-sm-12 jumbo_user"> 
   <h1 class="text-center" >DASHBOARD</h1>
   <br>

   <a class="a_color" href="attendancepanel.php"><button type="button" class="btn btn-primary btn-lg3">Take Attendance</button></a>
   
   <a class="a_color" href="viewattendanceadmin.php"><button type="button" class="btn btn-primary btn-lg3">Today's Attendance</button></a>
   
   <a class="a_color" href="viewattendanceadminfull.php"><button type="button" class="btn btn-primary btn-lg3">Overall Attendance</button></a>
   
   <a class="a_color" href="employee.php?insert_employee=insert_employee"><button type="button" class="btn btn-primary btn-lg3">Insert New Student Details</button></a>
   
   <a class="a_color" href="insertadmin.php"><button type="button" class="btn btn-primary btn-lg3">Insert New Admin</button></a>
   
   <a class="a_color" href="employee.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg3">View Student Details</button></a>
   
  
   
</div>
  

<?php } ?>


