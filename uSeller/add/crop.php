<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!--Link Files-->
    <link rel="stylesheet" href="../../css/BS/bootstrap.css">
    <link rel="stylesheet" href="../../css/main.css">
    <script type="text/javascript" src="../../js/BS/bootstrap.js"></script>
    <!--Cropper files-->
   <link rel="stylesheet" href="../../css/cropper.min.css">

   <script src="../../js/jquery.min.js"></script>
   <script src="../../js/cropper.min.js"></script>
   <script src="../../js/scripts.js"></script>
    <!----/Link Files----->


    <title>Top Shop</title>
    

  </head>
  <body>
    <nav class="navbar fixed-top   navbar-light bg-dark"> <!--fixed-top -->

      <div ><!--logo and brandName-->
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <a class="navbar-brand" href="#" style="color: rgb(8, 133, 126);font-style:inherit;">
          <img src="../../img/cart (1).png" style="width: 50px;height:50px ;"> TopShop.lk
        </a>
      </div><!--/logo and brandName-->


    </nav> <!--/fixed-top -->

 
   

    <div id="mySidenav" class="sidenav">
    
      <div id="dis">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <center>
          <img src="../../img/logo.png" href="#"  >
        </center>
  
        <a href="#">
        <img src="../../img/cart (1).png" style="  width: 30px;height: 30px;">
          <button type="button" class="btn btn-lg btn-outline-primary">
             My Orders
          </button>
        </a>
  
        <a href="#">
          <button type="button" class="btn btn-lg btn-outline-primary">
            <img src="../../img/cart (1).png" style="  width: 30px;height: 30px;"> My Orders
          </button>
        </a>
        <a href="#">
           <button type="button" class="btn btn-lg btn-outline-primary">
             <img src="../../img/cart (1).png" style="  width: 30px;height: 30px;"> My Orders
           </button>
        </a>
        <a href="#">
           <button type="button" class="btn btn-lg btn-outline-primary">
             <img src="../../img/cart (1).png" style="  width: 30px;height: 30px;"> My Orders
           </button>
        </a>
        <a href="#">
           <button type="button" class="btn btn-lg btn-outline-primary">
             <img src="../../img/cart (1).png" style="  width: 30px;height: 30px;"> My Orders
           </button>
        </a>
       </div>
   </div>

<script>
function openNav() {

  document.getElementById("mySidenav").style.width = "250px";
   document.getElementById("dis").style.display="inline";
}

function closeNav() {
   document.getElementById("dis").style.display="none";
  document.getElementById("mySidenav").style.width = "0";

}

</script>
   


<br/><br/><br/>
    <div class="container"><!------------------------------------ Contain ----------------------------------------->
    <br/>
<h3>Add product</h3>
   <br/>



<div class="row"> 

 <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
      <img src="img/1.jpg" class="mx-auto d-block img-fluid border border-primary rounded">
    </div>
  <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
      <img src="img/1.jpg" class="mx-auto d-block img-fluid border border-primary rounded">
    </div>
    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
      <img src="img/1.jpg" class="mx-auto d-block img-fluid border border-primary rounded">
    </div>
    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
      <img src="img/1.jpg" class="mx-auto d-block img-fluid border border-primary rounded">
    </div>

  </div>


<!-- Image Upload ---->

  
    
    <h2>1. Select File</h2>
    <div class="form">    
        <input type="file" name="img_file" id="img_file">
        <button id="crop">Crop</button>
    </div>
    
    <h2>2. Crop</h2>
    <div>
      <canvas id="canvas">
        Your browser does not support HTML5 Canvas
      </canvas>
    </div>
    
    <h2>3. Result</h2>
    <div id="result">
      
    </div>

    <h2>4. Upload Cropped Image</h2>
<form action="upload-img.php" method="POST">
      <input type="hidden" name="file_name" id="file_name">
      <input type="hidden" name="cropped_img" id="cropped_img">
     
   
<!-- /Image Upload ---->



<br>

  <div class="form-group row"><!-- SUBMIT BUTTON -->
    <div class="col-sm-10">
       <button type="submit" class="btn btn-primary" id="upload_img" name="upload_img" disabled>Add Product</button>
    
    </div>
  </div><!-- /SUBMIT BUTTON -->


</form>

    </div><!------------------------------------ /Contain ----------------------------------------->

   
  </body>
</html>


<?php //Upload index.php data to database

?>
