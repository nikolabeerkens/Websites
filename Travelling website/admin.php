<?php
  session_start();
  if(!isset($_SESSION['zalogowany']))
  {
	  header('Location:index.php');
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
   
   <link rel="stylesheet" href="texteditor.css" type="text/css"/>
   <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:600&amp;subset=latin-ext" rel="stylesheet" type="text/css"> 
   <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300,500&amp;subset=latin-ext" rel="stylesheet" type="text/css"> 
   <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet"> 
   <script src="ckeditor/ckeditor.js"></script>
   </head>

<body>
   <div id="container">
      <div id="nav">
	  
	  <a style='font-size:17px;'> Hello Alexandra!</a>
	  <br/><br/>MENU
	  <div style="font-size:3px;"><br/>__________________________________________________________________________________________________________________<br/></div><br/>
	  <a href="admin.php" class="sociallink">Homepage </a><br/>
	   <ol>
	   
             <li><a href="travelrussia.html" class="sociallink">Russia</a>
               <ul>
               <li><a href="peter.html" class="link">St.Petersburg</a></li>
               </ul>
			 </li>
			 
			 <li><a href="sweden.html" class="sociallink">Sweden</a>
			  <ul>
			   <li><a href="stockholm.html" class="link">Stockholm</a></li>
			  </ul>
			 </li>
			 
			 <li><a href="norway.html" class="sociallink">Norway</a>
			  <ul>
			   <li><a href="oslo.html" class="link">Oslo</a></li>
			  </ul>
			 </li>
			 
			 <li><a href="estonia.html" class="sociallink">Estonia</a>
			  <ul>
			   <li><a href="tallin.html" class="link">Tallin</a></li>
			  </ul>
			 </li>
			 
			 <li><a href="italy.html" class="sociallink">Italy</a>
			  <ul>
			   <li><a href="rome.html" class="link">Rome</a></li>
			   <li><a href="florence.html" class="link">Florence</a></li>
			  </ul>
			 </li>
			 
			 <li><a href="france.html" class="sociallink">France</a>
			  <ul>
			   <li><a href="paris.html" class="link">Paris</a></li>
			   <li><a href="nice.html" class="link">Nice</a></li>
			   <li><a href="cannes.html" class="link">Cannes</a></li>
			  </ul>
			 </li>
			 
			 <li><a href="croatia.html" class="sociallink">Croatia</a>
			  <ul>
			   <li><a href="krk.html" class="link">Krk</a></li>
			   <li><a href="crikvenica.html" class="link">Crikvenica</a></li>
			   <li><a href="zadar.html" class="link">Zadar</a></li>
			  </ul>
			 </li>
			  
			  <li><a href="bulgaria.html" class="sociallink">Bulgaria</a>
			  <ul>
			   <li><a href="sofia.html" class="link">Sofia</a></li>
			  </ul>
			 </li>
			 
			 <li><a href="poland.html" class="sociallink">Poland</a>
			  <ul>
			   <li><a href="warsaw.html" class="link">Warsaw</a></li>
			  </ul>
			 </li>
			<br/>
			 <li>Galery
			  <ul>
               <li><a class="link">Food galery</a></li>
			   <li><a class="link">Books galery</a></li>
			  </ul>
			</li>
		   
		  </ol>
		  <br/>
		  <br/>


    <a href="logout.php" class="sociallink">Log out</a>

	  </div>
	  <div id="logo"><img src="foot.png"/> Text Editor Admin <img src="foot.png"/>
	  </div>
	  
	  <form action="main.php" method="post">
	  <textarea class="ckeditor" name="editor" id="editor" style="margin-left:10px;font-family: 'Alegreya Sans SC', sans-serif;">
	  </textarea>
	  <input type="submit" value="Send"/>
	  </form>

	  
   </div>



</body>
</html>

</html>