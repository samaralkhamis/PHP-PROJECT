<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="welcome.css">
	<link rel="stylesheet" href="sign.css">
    

    <title>welcome</title>
</head>
<body>
<div id="center">

    <h1>Welcome <?php echo $_SESSION['FirstName']." ".$_SESSION['SecondName']." ".$_SESSION['ThirdName']." ".$_SESSION['LastName']; ?></h1>
			<div class="letter_container_1">
				<span>W</span>
			</div>
			<div class="letter_container_2">
				<span>e</span>
			</div>
			<div class="letter_container_3">
				<span>&nbsp;</span>
			</div>
			<div class="letter_container_4">
				<span>D</span>
			</div>
			<div class="letter_container_5">
				<span>o</span>
			</div>
			<div class="letter_container_6">
			<span>&nbsp;</span>
			</div>
			<div class="letter_container_7">
				<span>T</span>
			</div>
  		<div class="letter_container_8">
				<span>h</span>
			</div>
  		<div class="letter_container_9">
				<span>i</span>
			</div>
  		<div class="letter_container_10">
				<span>s</span>
			</div>
  		<div class="letter_container_11">
		  <span>&nbsp;</span>
			</div>
 		  <div class="letter_container_12">
				<span>P</span>
			</div>
  		<div class="letter_container_13">
				<span>a</span>
			</div>
  		<div class="letter_container_14">
				<span>g</span>
			</div>
 		  <div class="letter_container_15">
				<span>e</span>
			</div>
  		<div class="letter_container_16">
		  <span>&nbsp;</span>
			</div>
  		<div class="letter_container_17">
				<span>I</span>
			</div>
 		  <div class="letter_container_18">
				<span>n</span>
			</div>
  		<div class="letter_container_19">
		  <span>&nbsp;</span>
			</div>
  		<div class="letter_container_20">
				<span>P</span>
			</div>
  		<div class="letter_container_21">
				<span>H</span>
			</div>
  		<div class="letter_container_22">
				<span>P</span>
			</div>
		<br><br>
		<div><h3> Your Email is :  <?php echo $_SESSION['Email']; ?></h3>
		<h4> Your Mobile Phone is :  <?php echo $_SESSION['Phone_Num']; ?></h4>
		<h5> Welcom to Our website .. Here You See That Your Credentials Login Done . </h5>
		</div>

		<?php echo '<br><br> <a href="landing.php"><input class="custom-btn btn-5" type="button" name="logout" value="LOGOUT"></a>'; ?>

</body>
</html>