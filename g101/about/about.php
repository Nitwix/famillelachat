<!DOCTYPE html>
<html>
	<?php include "includes/head.php" ?>
	<body onclick="collapseNavbar()">
		<?php include "includes/navbar.php";?>
		<div class="container" > <!-- collapses the navbar when the 'content' is clicked-->
			<div class="row">
				<div class="col-sm-2"></div> <!-- so it's aligned in the middle -->
				<div class="col-sm-8">
					<h1 class="text-center text"></h1>
					<h3 class="text-center text"></h3>
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="row">
				<!--<div class="col-sm-2"></div>-->
				<div class="col-sm-6 col-xs-12">
					<img class="img-responsive" src="photos/1.jpg">
				</div>
				<div class="col-sm-6 col-xs-12">
					<img class="img-responsive" src="photos/13.jpg">
				</div>
			</div>
		</div>
		<?php include "includes/footer.php" ?>
		<script>
			var lang = "<?php echo $lang ?>";
			var contents = {
				fr: ["Bienvenue sur le site de l'appartement Greppon 101 à Thyon 2000",
					 "Vous trouverez ici toutes les informations nécessaires concernant notre studio de vacances à Thyon 2000"],
				nl: ["Welkom op de site van onze vakantiestudio Greppon 101 in Thyon 2000",
					 "U vindt hier alle informatie die u nodig heeft om de studio te huren"],
				en: ["Welcome on the site of the apartment Greppon 101 in Thyon 2000",
					"You will find all the informations you need about our apartment on this website"]
			};
			insertText(lang,contents);
		</script>
	</body>
</html>