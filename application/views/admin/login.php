<!DOCTYPE html>
<html>
<body>


  <?php
    $error=	$this->session->flashdata('Login');
     if($error){
     echo $error;

	   }
	    ?>
<form action="" method="POST">
  First name:<br>
  <input type="text" name="username" required>
  <br>
  Last name:<br>
  <input type="password" name="password" required>
  <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
