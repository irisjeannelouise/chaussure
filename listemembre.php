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

<div class="container" style="margin-top:100px">
<h2>Salut <?php echo $_POST["prenom"]; ?>, </h2> 
<h3> Tu chausses du <?php echo $_POST["pointure"]; ?>! </h3>

<?php if($_POST["prenom"] == "julie"){
	echo "<p> Tu es une femme qui sens l'ail.</p>";
	}
	?>

	<?php if($_POST["prenom"] == "antoine"){
	echo "<p> Tu es un homme qui aime l'ail.</p>";
	}
	?>

	<?php if($_POST["prenom"] == "iris"){
	echo "<p> Tu n'es pas humaine.</p>";
	}
	else{
			echo "<p>tu as le droit de reprendre des frites</p>";
		}
	?>

	<?php if($_POST["prenom"] == "jackson"){
	echo "<p> Tu n'es pas humain, tu es beau.</p>";
	}
	?>
	
	<?php if($_POST["prenom"] == "thomas"){
	echo "<p> Tu es un vilain biquet.</p>";
	}
	else{
			echo "<p>tu as le droit de reprendre des frites</p>";
		}
	?>

	<?php if($_POST["prenom"] == "maxime"){
	echo "<p> Tu aimes la galette et tu sais très bien comment.</p>";
	}
		else{
			echo "<p>tu as le droit de reprendre des frites</p>";
		}
	?>

	<?php if($_POST["pointure"] <= 20){
	echo "<p> Tu es chinois/se</p>";
	}
	?>
<table class="table">
     <thead>
       <tr>
         <th>Nom</th>
         <th>Prénom</th>
         <th>Pointure des pieds</th>
         <th style="width: 36px;"></th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td><?php echo $_POST["email"] ?></td>
         <td><?php echo $_POST["prenom"] ?></td>
         <td><?php echo $_POST["pointure"] ?></td>
         <td>
             <a href="user.html"><i class="fa fa-pencil"></i></a>
             <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-times"></i></a>
         </td>
       </tr>      </tbody>
   </table> 
   </div>

</body>
</html>