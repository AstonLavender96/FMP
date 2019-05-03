<?php session_start();?>
<html>
<head>
<title>Language Homepage!</title>
<link rel='stylesheet' href='style.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    
</head>
        <body style='margin:0;'>
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
			
			<li class='nav-item'>
				<a class='nav-link' href='signout.php'>Sign out</a>";}
				?>
        </li>
        
    </ul>
  </div>
</nav>
    
</section>

<section id='context'>
    <div class='container'>
    <div class='row'>
    <div class='col-md-6'>
    <p class='main-title'>Welcome to this website!</p>
    <p>Here you can find students or teachers, what ever your preference is! If you wish to learn a language from someone who is willing to teach you, or find a student who wishes to learn your native language and you want to give them the best learning experience!</p>
    
  

    
  
    
    </div><!---col-md-6--->   
    </div><!---row--->  
    </div><!---container--->  
    
    
    
    </section>
    
    
    
    
    
</body>
</html>