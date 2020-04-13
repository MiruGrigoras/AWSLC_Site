<?php

$con = mysql_connect("localhost","grigoras_miruna","miruna");
if (!$con) 
    die('Conexiune esuata '.mysql_error());
 echo "Conexiune cu succes!";
    
 mysql_select_db("grigoras_miruna", $con);

 if(isset($_POST['send']))
     {
      $nume=$_POST['nume'];
      $email=$_POST['email'];
      $mesaj=$_POST['mesaj'];
	  
      $sql=mysql_query("INSERT INTO Mesaje (Nume, Email, Mesaj) 
	  VALUES ('$nume', '$email', '$mesaj')");
	  
      if(!$sql) {
        echo "Error: " . $sql . "<br>" . $con->error;
        } else {
		echo "Am adaugat un articol!"."<br>";
        }
}
$result = mysql_query("SELECT * FROM Mesaje");

while($row = mysql_fetch_array($result))
  {
  echo "<tr>" .
       "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
  echo "</tr>";
  }
 echo "</table><br>";  

mysql_close($con);
?>
