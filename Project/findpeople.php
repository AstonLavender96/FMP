<?php
    session_start();

    $a = $_GET["inputGroupSelect01"];
    $b = $_GET["inputGroupSelect02"];

    $conn = new PDO ("mysql:host=localhost;dbname=alavender;", "alavender", "SaeRae8p");
	if ($a != NULL){
    $results = $conn->query("SELECT * FROM fmp_users WHERE role = '$a' AND language = '$b'");
    }
	
    $assocArray = $results->fetchALL(PDO::FETCH_ASSOC);
	
	echo json_encode($assocArray);

    
    
?>