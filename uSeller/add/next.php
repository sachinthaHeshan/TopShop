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



     <!----Connect Database----->
    <?php 

      $conn=new mysqli('localhost','root','','topshop');
  if($conn->connect_error){
    die("Connection faild<br>".$conn->connect_error);
  }

  ?>
     <!----/Connect Database----->


 <!----Get User config----->
<?php
$Email='fake123@fake.com';

?>
 <!----/Get User config----->


 <!----/Upload index.php data to database----->
<?php 

if(isset($_POST['next'])){


 // echo "connection successful<br>";
  
  $SQL="INSERT INTO product (Email,Name,price,weight) VALUES('".$Email."','".$_POST['pro_name']."',".$_POST['pro_price'].",".$_POST['pro_weight'].");";

if($conn->query($SQL)==true){
// echo "insert successful<br>";
}
else{
   echo "error insert";
}
}
?>
 <!----/Upload index.php data to database----->


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

<h4>Images</h4>
   <br/>



<div class="row"> 


<?php 

//--get num_of_images
$num_of_images=0;

  $SQL="SELECT num_of_images FROM product WHERE Email='".$Email."' AND Name='".$_POST['pro_name']."';";
  $result=$conn->query($SQL);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      
     $num_of_images= $row['num_of_images'];
    }
    
  }
//-/get num_of_images
echo($num_of_images);
  
  $count=1;
  echo('&nbsp;');
  while($count<=$num_of_images){

    echo("<div class='card' style='width: 5rem;'>");
    echo("<img src='img/1.jpg' class='card-img-top border border-secondary'>");
    echo("<p class='text-center'>image ".$count."</p></div>&nbsp;");
    $count++;
  }
  echo("</div>");
  if($num_of_images<4){
echo("<br><form action='crop.php' method='POST'>");
echo ("<input type='hidden' name='Email' value='".$Email."'>");
echo ("<input type='hidden' name='pro_name' value='".$_POST['pro_name']."'>");
     echo("<input type='submit' class='btn btn-secondary' value='Add image' name='add'>");
    echo('</from>');
  }
 
 ?>



<br><br><br><br>

  <div class="form-group row"><!-- SUBMIT BUTTON -->
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" >Add Product</button>
   
    </div>
  </div><!-- /SUBMIT BUTTON -->




    </div><!------------------------------------ /Contain ----------------------------------------->

   
  </body>
</html>




