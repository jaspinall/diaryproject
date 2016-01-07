<? include("login.php"); ?> 

<!doctype html>
<html>
<head>
    <title>My Secret Diary</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<style>

	html, body {
		height:100%;
	}
	
	#topContainer {
		background-image:url("diary.jpg");
		width:100%;
		height:100%;
		background-size:cover;
		background-position:center;
		padding-top:100px;
	}	
	
	#topRow {
		margin-top:100px;
	}
	
	.center {
		text-align:center;
	}
	
	.roseColored {
		color:#FED1B7;		
	}
	
		
	.pushDown {
		padding-top:50px;
	}

</style>

</head>

<body>

<div class="navbar navbar-default navbar-fixed-top">
  	
  		<div class="container">
  		
  			<div class="navbar-header">
  			
  				<a href="" class="navbar-brand">My Secret Diary</a>
  			
  			
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

 				<span class="sr-only">Toggle navigation</span>

 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>

 				</button>
 			
 			</div>	
  				
  				
  			  <div class="collapse navbar-collapse">		

  			
  				<form class="navbar-form navbar-right" method="post">
  		
		
						<div class="form-group">

							<input type="email" placeholder="email" class="form-control" name="loginEmail" id="loginEmail" value="<?php echo addslashes($_POST['loginEmail']); ?>"/>
							
							<input type="password" placeholder="password" class="form-control" name="loginPassword" id="loginPassword" value="<?php echo addslashes($_POST['loginPassword']); ?>"/>
	
							<input type="submit" name= "submit" class="btn btn-success" value="Log In">
		
						</div>
			
					</form>	
  					
  		
  			</div>	
  		
  		</div>
  		
  	</div>

<div class="container" id="topContainer">
    
    	<div class="row topRow">
			
			<div class="center roseColored col-md-6 col-md-offset-3">
    	
    			<h1>My Secret Diary</h1>
    			
    			<p class="lead">A place to store your secret thoughts</p>
 	 		
 	 			<p>Sign up below to access your own personal diary.</p>
    	
    		</div>
    	
    	</div>
    	
    	
    	<div class="row pushDown">
			
			<div class="col-md-6 col-md-offset-3">
  		

		<form method="post">
		
			<div class="center form-group">
			
			<label for="email">Email</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="a@a.com" value="<?php echo addslashes($_POST['email']); ?>"/>
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" id="password" placeholder="password" value="<?php echo addslashes($_POST['password']); ?>"/>
	
			</div>
			
			<div class="center form-group">
			
			<input type="submit" class="btn btn-default" name="submit" id="signup" value="Sign Up" />

			</div>
		
		</form>
	
			
		<?php
    	
    		if ($error) {
    		
    			echo '<div class="alert alert-danger">'.addslashes($error).'</div>';	
    		
    		
    		} else if ($message) {
    		
    			echo '<div class="alert alert-success">'.addslashes($message).'</div>';	
    		
    		
    		} else if ($success) {
    		
    			echo '<div class="alert alert-success">'.addslashes($success).'</div>';
    			
    		}	
    		
    	?>	
    	
    	</div>	
		
		</div>
	
	</div>



<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		

</body>
</html>