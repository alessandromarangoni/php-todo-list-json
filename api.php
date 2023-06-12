<?php 
$toDo=['Rifare il letto','riordinare la camera','spolverare i mobili','annaffiare le piante'];
header('Content-Type: application/json');
echo json_encode($toDo);
?>