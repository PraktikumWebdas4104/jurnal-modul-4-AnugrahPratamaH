<?php 
		if(isset($_POST['submit'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$user=array(
				"user"=>"tama",
				"pass"=>"2103");

		if($username==$user['user']&&$password==$user['pass']){
			
			echo "Berhasil BRO!"."<br>";
			?>
			<center><h1> ISI DATA BRO!</h1><br></center>

			<form method="POST">

			FUTSAL<input type="checkbox" name="hobi[]" value="Futsal"><br><br>
			VOLI<input type="checkbox" name="hobi[]" value="Voli"><br><br>
			BASKET<input type="checkbox" name="hobi[]" value="Basket"><br><br>
			BOWLING<input type="checkbox" name="hobi[]" value="Bowling"><br><br> 
			FOTO KAMU <input type="file" name="foto"><br>

			<input type="submit" name="kirim" value="kirim">
			
		</form>
		<?php 
		error_reporting(0);

			if(isset($_POST['kirim'])){

				$data=$_POST['hobi'];
			foreach ($data as $hobby) {
				# code...
				echo $hobby;
			}

			}  

			
		?>
		<?php
			}else{
				echo "Gagal BRO!";
			}
		}
 ?>







