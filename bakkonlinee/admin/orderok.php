<?php 
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; 
include 'inc/nav.php'; ?>






<div style="height:300px;">


   
     <img class="d-block justify-content-center mx-auto animate__animated animate__zoomIn animate__slow	2s " id="ok" src="admin/uploads/cashier.png"  style="width:150px; margin-top:150px; opacity: 1;  " alt="">
     
     <p class="text-center mt-3 animate__animated animate__fadeOutUp animate__delay-4s" style="font-family: rubik, sans-serif; font-weight:600;"  >Siparişiniz bize ulaştı. Yine bekleriz... <img class=" animate__animated animate__tada animate__delay-2s" src="admin/uploads/hello.png" alt="" style="width:30px;"> </p>
     
   

 </div>




<?php
    
    

   header("Refresh:5; url=view-order.php");

    
    
    ?>







</form>


</div>










<?php include "inc/footer.php" ?>
