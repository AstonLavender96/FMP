<?php
    $you = $_GET["you"];
    $them = $_GET["them"];
    $dateNow = $_GET["datenow"];
    $lastmessage = $_GET["lastmessage"];
    
	$conn = new PDO ("mysql:host=localhost;dbname=alavender;", "alavender", "SaeRae8p");
	
	$results = $conn->query("SELECT * FROM fmp_chat
    WHERE ID > '$lastmessage' AND timestamp >= '$datenow' AND sendid = '$them' AND recid = '$you'
    OR ID > '$lastmessage' AND timestamp >= '$datenow' AND sendid = '$you' AND recid = '$them' 
    ORDER BY ID ASC");

    $assocArray = $results->fetchALL(PDO::FETCH_ASSOC);

    echo json_encode($assocArray);
    
    //print_r($conn->errorInfo());

?>