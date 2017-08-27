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
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="row">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators" id="carouselIndicators">
						<!-- added via a script -->
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox" id="carouselInner">
						<!-- added via a script -->

					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
		</div>
		<?php include "includes/footer.php" ?>
		<script>
			var lang = "<?php echo $lang ?>";
			var contents = {
				fr: ["Quelques photos de Thyon et de l'appartement"],
				nl: ["Een paar fotos van Thyon en het appartement"],
				en: ["Some photos of Thyon and of the apartment"]
			};
			insertText(lang,contents);
		</script>
		<script> //THIS SCRIPT PUTS THE IMAGES IN THE IMAGE SLIDER (CAROUSEL)
			var lang = "<?php echo $lang; ?>";
			function makeMeta(title,src){
				var meta = {};
				meta.title = title;
				meta.src = src;
				return meta;
			}
			switch(lang){
				case 'fr':
					var imgsMeta = [makeMeta("Thyon - hiver","1"), //description, name of the image (1.jpg,2.jpg,...)
									makeMeta("Le salon","2"),
									makeMeta("La table à manger","3"),
									makeMeta("L'appartement vu de loin (centre de l'image)","4"),
									makeMeta("Le balcon","5"),
									makeMeta("La place centrale","6"),
									makeMeta("Le salon","7"),
									makeMeta("La cuisine","8"),
									makeMeta("Les lits supperposés","9"),
									makeMeta("La salle de bains","10"),
									makeMeta("La douche","11"),
									makeMeta("La piscine","12"),
									makeMeta("Thyon - été","13")];
					break;
				case 'nl':
					var imgsMeta = [makeMeta("Thyon - winter","1"),
									makeMeta("De kamer","2"),
									makeMeta("De etenstafel","3"),
									makeMeta("Het appartement gezien van ver (in het midden van de foto)","4"),
									makeMeta("Het balkon","5"),
									makeMeta("De centrale plaats","6"),
									makeMeta("De kamer","7"),
									makeMeta("De keuken","8"),
									makeMeta("Het stapelbed","9"),
									makeMeta("De badkamer","10"),
									makeMeta("De douche","11"),
									makeMeta("Het zwembad","12"),
									makeMeta("Thyon - zomer","13")];
					break;
				case 'en':
					var imgsMeta = [makeMeta("Thyon - winter","1"),
									makeMeta("The living-room","2"),
									makeMeta("The table","3"),
									makeMeta("The apartment seen from afar (in the center of the picture)","4"),
									makeMeta("The balcony","5"),
									makeMeta("The central place","6"),
									makeMeta("The living-room","7"),
									makeMeta("The kitchen","8"),
									makeMeta("The bunk bed","9"),
									makeMeta("The bathroom","10"),
									makeMeta("The shower","11"),
									makeMeta("The pool","12"),
									makeMeta("Thyon - summer","13")];
					   }
			for(var i in imgsMeta){ //complete the sources of the images
				imgsMeta[i].src = "photos/"+imgsMeta[i].src+".jpg";
			}

			$(document).ready(function(){
				var $carIndic = $("#carouselIndicators");
				var $carInner = $("#carouselInner");
				for(i in imgsMeta){
					if(i==0){
						$carIndic.append($("<li data-target='#myCarousel' data-slide-to='0' class='active'></li>"));

						var $item = $("<div class='item active carouselSizing'></div>");
					}else{
						$carIndic.append($("<li data-target='#myCarousel' data-slide-to='"+i+"'></li>"));

						var $item = $("<div class='item carouselSizing'></div>");
					}
					var $img = $("<img class='img-responsive center-block carouselSizing' src='"+imgsMeta[i].src+"'>");

					var $caption = $("<b><div class='carousel-caption'></div></b>");//<b> to put the description out of the img
					var $title = $("<h3 class='text-center'>"+imgsMeta[i].title+"</h3>");

					$caption.append($title);

					$item.append($img);
					$item.append($caption);

					$carInner.append($item);
				}
			});

		</script>
	</body>
</html>