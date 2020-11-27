<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="viewport" content="height=device-height, initial-scale=1">

	<link rel="stylesheet" href="css_1/contact.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="icon" href="img/povar.png" type="image/x-icon">
	
	<!--<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">-->

	<link rel="stylesheet" href="css_1/fonts_awesome/css/all.min.css">

  <link rel="stylesheet" href="css_1/animate.css">
  <script src="../js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

	<title>СмакОлики</title> 
</head>
</head>
<body>
<?php require "navbar.php" ?>
		
	<div class="container box mx-auto  d-block">
		
			<h3 class="write  text-center">Напишіть або зателефонуйте нам!</h3>
				<p class="icons text-center "><i class="fas fa-phone-volume"></i>+380970058126</p>
				<p class="icons_2 text-center "><i class="fas fa-phone-volume"></i>+380634411554</p>

			<form class="container form " action="check.php" method="POST">
				<input type="email" name="email" placeholder="Введіть ваш email" class="form-control"><br>
				<textarea name="message" class="form-control" placeholder="Введіть ваше повідомлення"></textarea><br>
				<button type="submit" name="send" class="btn btn-success">Відправити повідомлення</button>
			</form>			
	</div>
	

<?php require "footer.php" ?>



</body>
</html>

