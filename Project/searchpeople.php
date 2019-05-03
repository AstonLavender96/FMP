<?php session_start();

	if(!isset($_SESSION["gatekeeper"])){
			echo"<p>You are not signed in!</p>";
			echo "<a href='signin.html'>Sign in here!</a><br/>";
			echo "<a href='signup.html'>Or sign up here!</a><br/>";
			die();
	}else{
			header("searchpeople.php");
	}
			?>
<html>
<head>
<title>Search users!</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type='text/javascript' src='findpeople.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>  
<body onload='init()'>
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php">Language Go!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="searchpeople.php">Find people</a>
      </li>
      <li class="nav-item">
        <?php
				if(!isset ($_SESSION["gatekeeper"]))
				{
					echo "";
				}
				else{
	
				echo"<a class='nav-link' >Logged in as - ". $_SESSION["gatekeeper"] ."</a> </li> 
			<li class='nav-item'>
				<a class='nav-link' href='signout.php'>Sign out</a>";}
				?>        
    </ul>
  </div>
</nav>
    
</section>
<!-- OPTION SELECTION-->
<section id="context">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
        <p class="main-title">Search for learners/teachers here!</p>
        <div class="input-group mb-3">
        <label for="search-person">Category: </label>
            <select class ="custom-select" id="inputGroupSelect01">
                <option selected>Select preference</option>
                <option value="1">Teaching</option>
                <option value="2">Learning</option>
            </select>
        </div>
        <div class="input-group mb-3">
        <label for="search-person">Language: </label>
            <select class="custom-select" id="inputGroupSelect02">
                <option selected>Select language</option>
                <option value="1">French</option>
                <option value="2">German</option>
                <option value="3">English</option>
                <option value="4">Chinese</option>
                <option value="5">Portugese</option>
            </select>
            <div class="button-search">
            <button type="search" class="btn btn-primary" id="searchPeople">Search!</button>
        </div>
        </div>       

         <div class="card-deck" id="card-deck" style="width: 50rem;">         
		</div>      
    </div><!---col-md-6--->   
    </div><!---row--->  
    </div><!---container--->  
    </section>
       
</body>
</html>