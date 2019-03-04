<?php

   session_start();
   
   if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
   {
	   header('Location:admin.php');
	   exit();
   }
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>

   <meta charset="utf-8"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   
   <title>The Map of my Footsteps</title>
   
   <meta name="description" content="This website is about my travels, it contains photos and description about places which I visited."/>
   <meta name="keywords" content="travel, photos, map, footsteps, blog,"/>
   
   <link rel="stylesheet" href="styleadmin.css" type="text/css"/>
   <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:600&amp;subset=latin-ext" rel="stylesheet" type="text/css"> 
   <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300,500&amp;subset=latin-ext" rel="stylesheet" type="text/css"> 
   <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet"> 
   
   </head>


<body>
    <div style="font-size: 50px;text-align: center; margin-top: 60px; font-family: 'Pompiere', cursive;">THE MAP OF MY F<img src="foot.png"/><img src="foot.png"/>TSTEPS</div><div style="font-size:25px;text-align: center; font-family: 'Pompiere', cursive;">ADMIN</div>
	
	
	<div id="container">
		<form action="zaloguj.php" method="post">
			
			Username
			<input type="text" name="login" required >
			
			<br /><br />
			
			Password
			<input type="password" name="haslo" required >
			
			<br /><br />
			
			<input type="submit"value="Log in">
			
		</form>
		
		<?php
   if(isset($_SESSION['blad']))  echo $_SESSION['blad'];


?>
	</div>
	
</body>
</html>