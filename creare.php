<?php
$con = mysql_connect("localhost","grigoras_miruna","miruna");
if (!$con)
  {
  die('Nu s-a realizat conectarea: ' . mysql_error());
  }



mysql_select_db("grigoras_miruna", $con);
$sql = "CREATE TABLE Mesaje
(
nume varchar(30),
email varchar(50),
mesaj text
)";
echo "Tabela creata";



if(mysql_query($sql,$con))
{
  echo "Tabela creata";
}

mysql_close($con);
?>  