<?php
        
        $a = $_GET["id"];
        
        $conn = new PDO ("mysql:host=localhost;dbname=alavender;", "alavender", "SaeRae8p");
        
        $results = $conn->query("SELECT username FROM fmp_users WHERE ID = '$a'");
        $row = $results->fetch();
		
		echo $row[0];
    
?>