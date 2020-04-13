
<?php
$con = mysql_connect("localhost", "grigoras_miruna", "miruna");
if (!$con) {
    die('Conexiune esuata ' . mysql_error());
}
echo "Conectare buna";

$db_selected = mysql_select_db("grigoras_miruna", $con);
?>

