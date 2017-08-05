<!DOCTYPE html>
<html>
	<?php include "includes/head.php" ?>
	<body onclick="collapseNavbar()">
		<?php include "includes/navbar.php";?>
		<div class="container" > <!-- collapses the navbar when the 'content' is clicked-->
			<div class="row">
				<div class="col-xs-12">
					<h1 class="text-center text"></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-justify">
					<h3 class="text"></h3>
					<h3 class="text"></h3>
					<h3 class="text"></h3>
					<h3 class="text"></h3>
					<h3 class="text"></h3>
					<h3 class="text"></h3>
					<h3 class="text"></h3>
					<h3 class="text"></h3>
					<h3 class="text"></h3>
					<h3 class="text"></h3>
					<h3 class="text"></h3>
					<h3 class="text"></h3>

					<h2 class="text"></h2>
					<h3 class="text"></h3>
					<ul class="list-group">
						<li class="list-group-item text"></li>
						<li class="list-group-item text"></li>
					</ul>

					<h3 class="text"></h3>
					<ul class="list-group">
						<li class="list-group-item text"></li>
						<li class="list-group-item text"></li>
						<li class="list-group-item text"></li>
					</ul>

					<h2 class="text"></h2>
				</div>
			</div>
			
		</div>

		<?php include "includes/footer.php" ?>

		<script src="about/about_FR.js"></script>
		<script src="about/about_NL.js"></script>


		<script>
			var lang = "<?php echo $lang ?>";
			var contents = {
				fr: about_FR,
				nl: about_NL,
				en: "about_EN"
			};
			insertText(lang,contents);
		</script>
	</body>
</html>