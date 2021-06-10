<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM fam_quotes");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta Name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/Style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<title>Homepage</title>
</head>

	<style>
		body{
			font-family: 'Pacifico', cursive;
		}
		td{
			width: auto; 
			padding: 20px;
			margin: 14px;
		}
		h3{
			background: rgba(255, 255, 255, 0.25);
		}
		table{
			background: rgba(255, 255, 255, 0.25);
		}
	</style>

<body style="background-image: url('image/3.JPG'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<!--
<div class="container mx-auto rounded pl-5 pr-5 pt-5 pb-5 ml-5 mr-5 mb-5 mt-5" style="background-color: #191919; opacity: 0.86; color: white"><br>
	-->
<h1><?php echo "FAMOUS QUOTES LIST"; ?></h1>
	<h3><a href="add.html">Add new Data</a></h3><br/><br/>

    <table style="font-size: 18px;">
		<tr>
			<td class="pl-2">AUTHOR </td>
			<td class="pl-2">QUOTES </td>
			<td class="pl-5">UPDATE</td>
		</tr> 
</div>
        <?php
while( $res = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$res['author']."</td>";
    echo "<td>".$res['quote']."</td>";
    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
    echo "</tr>";
} 

?>
	</table><br><br>

    <nav class="btn btn-success blog-nav nav nav-justified my-5">
		<a class="text-white nav-link-prev nav-item nav-link rounded" href="index.php"><strong>EXIT</strong><i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
	</nav>
	
</body>
</html>