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
					<ul class="list-group">
						<li class="list-group-item text-center"><a href="http://www.hetloo-spankeren.nl/" class="text"></a></li>
					</ul>
				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>
		<?php include "includes/footer.php" ?>
		<script>
			var lang = "<?php echo $lang ?>";
			var contents = {
				fr: ["Liens affiliés",
					 "Maison de vacances \"Het Loo\", Pays-Bas"],
				nl: ["Gelinkte sites",
					"Vakantie woning \"Het Loo\", Nederland"],
				en: ["Linked sites",
					 "Holiday house \"Het Loo\", Netherlands"]
			};
			insertText(lang,contents);
		</script>
	</body>
</html>