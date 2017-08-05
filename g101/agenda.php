<!DOCTYPE html>
<html>
	<?php include "includes/head.php" ?>
	<body onclick="collapseNavbar()">
		<?php include "includes/navbar.php";?>
		<div class="container" > <!-- collapses the navbar when the 'content' is clicked-->
			<div class="row">
				<div class="col-md-2 col-lg-1"></div> <!-- so it's aligned in the middle -->
				<div class="col-md-8 col-lg-10">
					<h1 class="text-center text"></h1>
					<h3 class="text-center text"></h3>
					<p class="bg-success text-center text"></p>
				</div>
				<div class="col-md-2 col-lg-1"></div>
			</div>
			<div class="row">
				<div class='responsive-iframe-container' style='margin-top:20px'>
					<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%2390CAF9&amp;src=apc8see4v63vprppgat2u3hom8%40group.calendar.google.com&amp;color=%231565C0&amp;ctz=Europe%2FAmsterdam" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
		</div>
		<?php include "includes/footer.php" ?>
		<script>
			var lang = "<?php echo $lang ?>";
			var contents = {
				fr: ["Disponibilités de l'appartement",
					 "Vous trouverez ici l'agenda des disponibilités de l'appartement",
					 "Les cases vides représentent des dates libres"],
				nl: ["Beschikbaarheid van het appartement",
					 "U vindt hier alle data die vrĳ zĳn om te huren",
					 "Als het wit is, is het studio vrij om te huren"],
				en: ["Availability of the apartment",
					 "You will find all the dates at which you can rent our apartment",
					 "If the cells are blank, it means that the apartment is free for rent"]
			};
			insertText(lang,contents);
		</script>
	</body>
</html>