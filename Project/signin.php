<?php
    session_start();

    $a = $_POST["Username1"];
    $b = $_POST["InputPassword1"];

    $conn = new PDO ("mysql:host=localhost;dbname=alavender;", "alavender", "SaeRae8p");

    $results = $conn->query("SELECT * FROM fmp_users WHERE username = '$a' AND password = '$b'");
    
    $row = $results->fetch();

    if ($row == true)
    {
        $_SESSION["gatekeeper"] = $row["username"];
        
        
        header ("location: index.php");
    }
    else
    {
        echo "Username of password incorrect!";
    }
    
?>