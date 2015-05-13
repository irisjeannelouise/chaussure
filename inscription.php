<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
	<title></title>
</head>
<body>
<?php include "menu.php" ; ?>
<H1 style="margin-top:75px; margin-left:45px;">Vous avez des pieds</H1>
<div class="container" style="margin top 100px">
<form action="listemembre.php" method="POST" class="form-inline" role="form" style="margin-top:50px; margin-left:55px;">

	<div class="form-group">
		<label class="sr-only" for="">label</label>
		<input name="email" class="form-control" id="" placeholder="email"><br>
		<input name="prenom" class="form-control" id="" placeholder="prenom"><br>
		<input name="pointure" class="form-control" id="" placeholder="pointure des pieds"><br>
	</div>
<br><br>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>