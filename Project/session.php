<?php
    session_start();
    if(isset($_SESSION["gatekeeper"])){
        
        $a = $_SESSION["gatekeeper"];
        
        $conn = new PDO ("mysql:host=localhost;dbname=alavender;", "alavender", "SaeRae8p");
        
        $results = $conn->query("SELECT * FROM fmp_users WHERE username = '$a'");
         $row = $results->fetch();

        if ($row == true)
        {
            $id = $row["id"];
            
            //Returns user's ID
            echo $id;
        }
    }
    else{
        
        //Returns NULL
        echo"not signed in";
    }
    
?>