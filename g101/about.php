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

		<script src="about_FR.js"></script>

		<script>
			var lang = "<?php echo $lang ?>";
			var contents = {
				fr: about_FR,
				nl: about_NL,
				en: about_EN
			};
			insertText(lang,contents);
		</script>
	</body>
</html>