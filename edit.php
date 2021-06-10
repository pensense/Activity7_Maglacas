<?php 

	include_once("config.php");

if( isset($_POST['update']))
{
			$id = mysqli_real_escape_string($mysqli, $_POST['id']);
			$author = mysqli_real_escape_string($mysqli, $_POST['author']);
			$quote = mysqli_real_escape_string($mysqli, $_POST['quotes']);
			

			if( empty($author) || empty($quote) ){

				if(empty($author)){
					echo "<font color='red'> Author field is empty. </font><br/>";
				}
				if(empty($quote)){
					echo "<font color='red'> Quotes field is empty. </font><br/>";
				}
				
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

			} else {

				$result = mysqli_query($mysqli, "UPDATE fam_quotes set author='$author', quote='$quote' WHERE id=$id");
				header("Location: indexfq.php");
				
			}

}
?>

<?php 

	$id = $_GET['id'];

	$result = mysqli_query($mysqli,"SELECT * from fam_quotes where id=$id");

	while($res = mysqli_fetch_array($result))
	{
		$author = $res['author'];
		$quote = $res['quote'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="wIDth=device-wIDth, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/edit.css">
	<title>Edit data</title>
</head>
<body style="background-image: url('image/6.JPG'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<div class="container mx-auto rounded pl-5 pr-5 pt-5 pb-5 ml-10 mr-5 mb-5 mt-5" style="background-color: #8C4F2F; opacity: 70%"><br>
	<form name="form1" method="post" action="edit.php">

    <table width="70%">
			<tr>
				<td style="color: white">Author</td>
				<td><input type="text" name="author" value="<?php echo $author;?>"></td>
			</tr>
			<tr>
				<td style="color: white">Quotes</td>
				<td><input type="text" name="quotes" value="<?php echo $quote;?>"></td>
			</tr>
			<tr>
				<td>
					<input type="hIDden" name="id" value="<?php echo $_GET['id'];?>">
				</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>		
		
<br>
	</form>

</div>

	
</body>
</html>