
 <form action="" method="POST">
	Username : <input type="text" name="username"><br><br>
	Password : <input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="kirim">                                                                                                             

</form>
<?php 
	
if(isset($_POST['submit'])){

	include 'proses.php';

}
	
 ?>   
  

