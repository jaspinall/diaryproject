<?  

	session_start();
	
	include("connection.php");
	
	$query = "SELECT diary FROM `users` WHERE id='".$_SESSION['id']."' LIMIT 1";
		
	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_array($result);
	
	$diary = $row['diary']; 
		

?> 

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
		margin-top:75px;
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
  		
  			<div class="navbar-header pull-left">
  			
  				<a class="navbar-brand">My Secret Diary</a>					
	
  			</div>
  		
  			<div class="pull-right">
  				<ul class="navbar-nav nav">
  					<li><a href="index.php?logout=1">Log Out</a><li>
  				</ul>
  			
  			</div>
  			
  			</div>
  		
  		</div>

<div class="container contentContainer" id="topContainer">
    
    	<div class="row topRow">
			
			<div class="center roseColored col-md-6 col-md-offset-3">
    	
    			<textarea class="form-control"><? echo $diary; ?></textarea>
    	
    	</div>	
		
		</div>
	
	</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	<script>
	
		$(".contentContainer").css("min-height",$(window).height());
		
		$("textarea").css("height",$(window).height()-150);
		
		$("textarea").keyup(function() {
		
			$.post("updatediary.php", {diary:$("textarea").val()} );
		
		});
	
	</script>
		

</body>
</html>