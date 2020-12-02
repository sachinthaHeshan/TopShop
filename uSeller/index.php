<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="../css/BS/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Top Shop</title>
    

  </head>
  <body>
    <nav class="navbar fixed-top   navbar-light bg-dark"> <!--fixed-top -->

      <div ><!--logo and brandName-->
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <a class="navbar-brand" href="#" style="color: rgb(8, 133, 126);font-style:inherit;">
          <img src="../img/cart (1).png" style="width: 50px;height:50px ;"> TopShop.lk
        </a>
      </div><!--/logo and brandName-->

      <div style="position: relative;text-align: center;color: white;"><!--cart icon-->
        <a class="navbar-brand" href="cart/" style="color: rgb(8, 133, 126);font-style:inherit;">
          <img src="../img/cart (2).png" style="width: 50px;height:50px ;">
          <div style="position: absolute; top: 42%; left: 40%; transform: translate(-50%, -50%);font-size: 15px;color: black;">122</div>
        </a>
      </div><!--/cart icon-->

    </nav> <!--/fixed-top -->

 
    <nav class="navbar  navbar-light bg-dark"> <!--Search box bar-->
      <div class="col-12 float-left" >
        <br>
        <br>
        <br>
      </div>

      <div class="col-12 float-left" role="group" >
         <div class="input-group mb-3 col-12 col-sm-8 col-md-6 col-lg-4 col-xg-1 ">
            <input type="text" class="form-control bg-dark btn-outline-primary" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" style="color:cornsilk">
            <div class="input-group-append">
              <button class="btn btn-outline-primary" type="button" id="button-addon2"><img src="../img/search1.png" alt="Search" style="width: 20px;height: 20;"></button>
            </div>
         </div>
    </nav> <!--/Search box bar-->


    <div id="mySidenav" class="sidenav">
    
      <div id="dis">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <center>
          <img src="../img/logo.png" href="#"  >
        </center>
  
        <a href="#">
        <img src="../img/cart (1).png" style="  width: 30px;height: 30px;">
          <button type="button" class="btn btn-lg btn-outline-primary">
             My Orders
          </button>
        </a>
  
        <a href="#">
          <button type="button" class="btn btn-lg btn-outline-primary">
            <img src="../img/cart (1).png" style="  width: 30px;height: 30px;"> My Orders
          </button>
        </a>
        <a href="#">
           <button type="button" class="btn btn-lg btn-outline-primary">
             <img src="../img/cart (1).png" style="  width: 30px;height: 30px;"> My Orders
           </button>
        </a>
        <a href="#">
           <button type="button" class="btn btn-lg btn-outline-primary">
             <img src="../img/cart (1).png" style="  width: 30px;height: 30px;"> My Orders
           </button>
        </a>
        <a href="#">
           <button type="button" class="btn btn-lg btn-outline-primary">
             <img src="../img/cart (1).png" style="  width: 30px;height: 30px;"> My Orders
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
   

<!------------------------------------ Contain ----------------------------------------->

    <div class="container">
    <br/>
<h1>Seller DashBoard</h1>
  <br/>  <br/>
<a class="btn btn-primary" href="add" role="button">Add New Product</a>


 <br/>  <br/> <br/>  <br/>

<div class="card" style="width: 10rem;">
  <img class="card-img-top" src="add/img/1.jpg" alt="Card image cap">

</div>



    </div>

   
  </body>
</html>
