<?php session_start();


	if(!isset($_SESSION["gatekeeper"])){
			
			die("You're not signed in!");
			
	}else{
			header("chatroom.php");
	}
		
?>
<html>

<head>
<title>Language Homepage!</title>
<link rel='stylesheet' href='style.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <style>
        .sent{
            float:right;
        }
        .received{
            float:left;
        }
    </style>
</head>
        <body onload="main();" style='margin:0;'>
            <input id="receiver" type="hidden" value=<?php echo $_POST{"receiver"};?>>
        <section id='nav-bar'>
            <nav class='navbar navbar-expand-lg navbar-light'>
            <a class='navbar-brand' href='index.php'>Language Go!</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class='collapse navbar-collapse' id='navbarNav'>
    <ul class='navbar-nav ml-auto'>
      <li class='nav-item'>
        <a class='nav-link' href='index.php'>Home <span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='searchpeople.php'>Find people</a>
      </li>
        <li class='nav-item'>
				<?php
				if(!isset ($_SESSION["gatekeeper"]))
				{
					echo "
					  <li class='nav-item'>
						<a class='nav-link' href='signup.html'>Sign up</a>
						</li>
						<a class='nav-link'  href='signin.html'>Sign In</a>
					";
				}
				else{
	
				echo"<a class='nav-link' >Logged in as - ". $_SESSION["gatekeeper"] ."</a> </li> 
			<li class='nav-item'>
				<a class='nav-link' href='signout.php'>Sign out</a>";}
				?>
        </li>
        
    </ul>
  </div>
</nav>
    
</section>
            
            
        <div id="main" style="width:500px; text-align:center;">
            <div id="chat-pane"  style=" display:inline; height:700px; width:500px; margin:0 auto;">
                <div id="chat-display" style="height:100%; overflow:auto;">
                    
                </div>
                <div id="chat-box" style="position:fixed; bottom:0px; width:700px;">
                    <input id="message-text" type="text" style="display:inline; float:left; width:80%; height:30px;">
                    <button id="btn1" style="display:inline; float:right; width:20%; height:30px;">Send</button>
                    
                </div>
            </div>
        </div>

</body>
    <script src='chat.js'></script>
</html>