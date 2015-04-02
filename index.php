<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tim nei...</title>
<!-- ** CSS ** -->
<link rel="stylesheet" type="text/css" href="css/theme.css" />
<link rel="stylesheet" type="text/css" href="css/hover.css" />
</head>
<body>
	<!-- ** PHP ** -->
    <!-- ** HTML ** -->
	<div class="centered">
		<form id="timnei" action="resources/nei_counter.php" method="post">
			<input type="submit" value="tim nei"
				class="btn btn-danger timbtn hvr-fade-red" />
		</form>

		<form id="timja" action="resources/ja_counter.php" method="post">
			<input type="submit" value="tim ja"
				class="btn btn-warning timbtn2 hvr-fade-orange" />
		</form>
	</div>
		<div class="panel panel-danger counter">
	  <div class="panel-heading">
	    <h3 class="panel-title">Tim Nei</h3>
	  </div>
	  <div class="panel-body">
	  	0
	  </div>
	</div>
	
	<div class="panel panel-warning counter">
	  <div class="panel-heading">
	    <h3 class="panel-title">Tim Ja</h3>
	  </div>
	  <div class="panel-body">
	  	0
	  </div>
	</div>
	
	<div class="progress progress-striped active counterProgress">
  		<div class="progress-bar progress-bar-danger" style="width: 80%"></div>
		<div class="progress-bar progress-bar-warning" style="width: 20%"></div>
	</div>
	
    </body>
    
    <footer>
    <div class="panel-footer">
    	<hr>
    	<h5></h5>
    	<h5>&#169; TimNei</h5>
    </div>
    </footer>
    
</html>