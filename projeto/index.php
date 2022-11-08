<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>
	<link rel="stylesheet" href="orbit-1.2.3/orbit-1.2.3.css" type="text/css" />
    <script src="orbit-1.2.3/jquery-1.5.1.min.js" type="text/javascript"></script>
	<script src="orbit-1.2.3/jquery.orbit-1.2.3.js" type="text/javascript"></script>
    
    <script type="text/javascript">
     $(window).load(function() {
         $('#banner').orbit();
     });
	</script>
</head>
	<!--  -->
<body>
		<?php include "html/header.php" ?>
		<div id="banner">
			<img src="img/banner/Banner1.png" alt="">
			<img src="img/banner/Banner2.png" alt="">
			<img src="img/banner/Banner3.png" alt="">
		</div>
		<main>

			
				
			
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>