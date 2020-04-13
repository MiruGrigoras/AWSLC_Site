<?php	
$con = mysql_connect("localhost","grigoras_miruna","miruna");

    
 mysql_select_db("grigoras_miruna", $con);


 if(isset($_POST['send']))
     {
      $nume=$_POST['nume'];
      $email=$_POST['email'];
      $mesaj=$_POST['mesaj'];
	  
      $sql=mysql_query("INSERT INTO Mesaje (nume, email, mesaj) 
	  VALUES ('$nume', '$email', '$mesaj')");
	  
     
		  
?>
		 
		  <!DOCTYPE html>

<html>

<link rel="stylesheet" href="docs/bara_navigare.css">
<link rel="stylesheet" href="docs/fonturi.css">
<link rel="stylesheet" href="docs/corp.css">
<link href='//fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>


<title>Weaves World</title>

<!--HEADER-->

<head>

<!--BARA DE NAVIGARE-->

<div class="navigare">
	<ul >
		<li><a href="index.html">Acas&#259</a></li>
		<li><a href="despre_pers.html">Despre personaje</a></li>
		<li><a href="despre_autor.html">Despre autor</a></li>
		<li style="float:right"><a href="contact.html">Contact</a></li>
	</ul>
</div>

<header class="scris">
<div class="font-effect-fire-animation">
	<div class="central"><a href="index.html">Allison Weaves &#351;i Lac&#259tul Co&#351marurilor </a></div>
</div>
</header>

</head>


<!--BODY-->

<body class="continut">

<br>
<br>
<center>

<h1 style="color: #fb5442">Mul&#355;umesc pentru mesaj!</h1>
<h3 style="color: #fb5442"> Pentru a te &#238;ntoarce la pagina principal&#259;, te rog apas&#259; <a href="index.html" style="color: #ff8b7f"> aici</a>.

</center>
<br> <br>
</body>

<!--FOOTER-->

<footer>

<div>
<a href="https://twitter.com/MiaRaiggors">
<img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="35" height="35" />
</a>
<a href="https://ro.pinterest.com/miaraiggors/">
<img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest.png" width="35" height="35" />
</a>
<a href="https://www.facebook.com/profile.php?id=100016688232684">
<img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="35" height="35" />
</a>
<a href="https://www.instagram.com/miaraiggors/?hl=en">
<img title="Instagram" alt="Instagram" src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram.png" width="35" height="35" />
</a>
</div>

	Copyright 2017 by Grigoras Miruna. All Rights Reserved.
</footer>

</html>




<?php
      
       
}

?>
