<?php  

session_start();

$_SESSION['tes'] = "Halo";

setcookie("cokiee_tes","Aaa", (time()+10000));

echo "<a href = 'session2.php'>tes</a>";
?>