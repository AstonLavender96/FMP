<?php

    $message = $_GET["message"];
    $sender = $_GET["sender"];
    $receiver = $_GET["receiver"];
    $lastmessage = $_GET["lastmessage"];
    $datenow = $_GET["datenow"];
    
	$conn = new PDO ("mysql:host=localhost;dbname=alavender;", "alavender", "SaeRae8p");
	
	$results = $conn->query("
	INSERT into fmp_chat (sendid, recid, message, timestamp)
	VALUES('$sender', '$receiver', '$message','$datenow');");
	
	$row = $results->fetch();
	
    echo $row;

    //print_r($conn->errorInfo());
    
?>