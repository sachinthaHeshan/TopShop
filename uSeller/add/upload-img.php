<?php 

	if (isset($_POST['upload_img'])) {
		// button is presssed

		$file_name = $_POST['file_name'];
		$base64_img = $_POST['cropped_img'];

		$image = explode(',', $base64_img);

		$upload_img = base64_decode($image[1]);

		$file_uploaded = file_put_contents('img/' . $file_name, $upload_img);

		if (!$file_uploaded) {
			// header('Location: next.php?file_upload_failed');
		}
	}

	// header('Location: next.php?file_upload_successful');

?>

<!----Catch Data----->
<?php
$pro_name=$_POST['pro_name'];
$Email=$_POST['Email'];
?>
<!----/Catch Data----->


  <!----Connect Database----->
    <?php 

      $conn=new mysqli('localhost','root','','topshop');
  if($conn->connect_error){
    die("Connection faild<br>".$conn->connect_error);
  }

  ?>
     <!----/Connect Database----->


 <!----/Update num_of_images data to database----->
<?php 

  
  $SQL="UPDATE product SET num_of_images=num_of_images+1 WHERE Email='".$Email."' AND Name='".$_POST['pro_name']."';";
echo($SQL);
if($conn->query($SQL)==true){
echo "update successful<br>";
}
else{
   echo "error update";
}

?>
 <!----/Update num_of_images data to database----->



	<form action="next.php" method="POST">
	<?php 
	
	echo("<input type='hidden' name='Email' value='".$Email."'>");
	echo("<input type='hidden' name='pro_name' value='".$pro_name."'>");
	?>
	<input type="Submit" id="clickButton" name="sub" value="submit">
	</form>

<script type="text/javascript">
	
 document.getElementById('clickButton').click();
</script>