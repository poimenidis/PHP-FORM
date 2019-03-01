<html>
<body>

Welcome <?php echo $_POST["nickname"], "<br>" ;?><br>
Your full name is: <?php echo $_POST["name"], "<br>" ;?>
Your email address is: <?php echo $_POST["email"], "<br>" ;?>
<?php if($_POST["website"]!=null){
	echo "Your website is:", $_POST["website"] , "<br>";
}	?>
<?php if($_POST["comment"]!=null){
	echo "You added this comment:", $_POST["comment"], "<br>";
}	?>
<?php if($_POST["gender"]!=null){
	echo "Your gender is:", $_POST["gender"], "<br>";
}	?>

</body>
</html> 
