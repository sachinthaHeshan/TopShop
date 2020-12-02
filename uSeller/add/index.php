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



<form action="next.php" method="POST">

 <div class="form-group"><!--Product Name-->
    <label for="inputAddress">Product Name</label>
    <input type="text" class="form-control" name="pro_name" placeholder="Name of New product">
 </div><!--/Product Name-->



 <label for="inputAddress">Product Weight</label>
<div class="input-group mb-3">
  <input type="number" class="form-control" name="pro_weight" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-append">
    <span class="input-group-text">g</span>
  </div>
</div>



 <label for="inputAddress">Product Price</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Rs.</span>
  </div>
  <input type="number" class="form-control" name="pro_price" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
</div>

<!-- Material checked -->
<div class="form-check">
  <input type="checkbox" class="form-check-input" name="pro_in_stock" checked>
  <label class="form-check-label" for="materialChecked2">In Stock</label>
</div>
<br>



<br>

  <div class="form-group row"><!-- SUBMIT BUTTON -->
    <div class="col-sm-10">
       <button type="submit" class="btn btn-primary"  name="next" >Next</button>
    
    </div>
  </div><!-- /SUBMIT BUTTON -->


</form>

    </div><!------------------------------------ /Contain ----------------------------------------->

   
  </body>
</html>
