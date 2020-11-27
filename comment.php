<?php 
require_once 'db.php';
require_once 'action.php';
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  	<meta name="viewport" content="height=device-height, initial-scale=1">

  	<link rel="stylesheet" href="css_1/comment.css">

  	<link rel="icon" href="img/povar.png" type="image/x-icon">

	<!--<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">-->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="css_1/fonts_awesome/css/all.min.css">



	<script src="../js/wow.min.js"></script>

  <script>
    new WOW().init();
  </script>

<title>СмакОлики</title>
</head>

<body>
 <?php require "navbar.php" ?>
 <div class="container ">
 	<div class="row justify-content-center mb-2">
 		<div class=" body_2 col-lg-5 bg-light rounder mt-2">
 			<h4 class="text-center p-2">Напишіть свій коментар!</h4>
 			<form action="action.php" method="POST" class="p-2">
 				<input type="hidden" name="id" value="<?= $u_id; ?>">
 				<div class="form-group">
 					<input type="text" name="name" class="form-control rounded-0" placeholder="Введіть своє ім'я" required value="<?= $u_name; ?>">
 				</div>

				<div class="form-group"><textarea name="comment" class="form-control rounded-0" placeholder="Напишіть свій коментар тут" required><?=$u_comment;?>
					</textarea>
				</div>
				<div class="form-group">
					<?php if($update == true){ ?>
						<input type="submit" name="update" class="btn btn-success rounded-0" value="Update Comment">
					<?php }else{ ?>

					<input type="submit" name="submit" class="btn btn-primary rounded-0" value="Відправити коментарій">
					<?php } ?>

					<h5 class="float-right text-success p-2"><?= $msg; ?></h5>
				</div>
 			</form>
 		</div>
 	</div>
 	<div class="row justify-content-center">
 		<div class=" body_2 body_22 col-lg-5 rounded bg-light p-3">
 			<?php
 				$sql = "SELECT * FROM comment_table ORDER BY id DESC";
 				$result = $conn -> query($sql);
 				while($row = $result -> fetch_assoc()){

 			?>
 			<div class="card mb-2 border-secondary">
 				<div class="card-header bg-secondary py-1 text-light">
 					<span class="font-italic">Опубліковано: <?= $row['name'] ?></span>
 					<span class="float-right font-italic"> <?= $row['cur_date'] ?></span>
 				</div>
 				<div class="card-body py-2">
 					<p class="card-text"><?= $row['comment'] ?></p>
 				</div>
 				<div class="card-footer py-2">
 					<div class="float-right">
 						<a href="action.php?del=<?=$row['id'] ?>" class="text-danger mr-2" onclick="return confirm('Видалити цей коментарій');" title="Видалити"><i class="fas fa-trash"></i></a>

 						<a href="comment.php?edit=<?=$row['id'] ?>" class="text-success" title="Редагувати"><i class="fas fa-edit"></i></a>
 					</div>
 				</div>
 			</div>
 			<?php } ?>
 		</div>
 	</div>
 </div>

	

 <?php require "footer.php" ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
	
</body>
</html>