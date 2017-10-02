<!DOCTYPE html>
<html>
	<?php include "includes/head.php" ?>
	<body onclick="collapseNavbar()">
		<?php include "includes/navbar.php";?>
		<div class="container" > <!-- collapses the navbar when the 'content' is clicked-->
			<div class="row">
				<div class="col-sm-1"></div> <!-- so it's aligned in the middle -->
				<div class="col-sm-10">
					<h1 class="text-center text"></h1>
					<h3 class="text-center text"></h3><h4 class='text-center'><big><a  href="mailto:info@famillelachat.com">info@famillelachat.com</a></big></h4>
					<h3 class="text-center text"></h3>
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<form name="contact" method="post" action="sendMail.php">
						<div class="form-group">
							<label for="email" class="text"></label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="msg" class="text"></label>
							<textarea rows="10" class="form-control" name="msg"></textarea>
						</div>
						<div class="g-recaptcha" data-sitekey="6LfFDyoUAAAAAH5wnz65tWHsdbZbi9CgCELkF_Hy"></div>
						<button type="submit" class="btn btn-primary text"></button>
						<input name="lang" value="<?php echo $lang ?>" style="visibility:hidden;"><!-- to submit the lang to sendMail.php-->
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12" style='margin-top: 20px'>
					<?php //TO FINISH
								$err_msg = '';
							   $ok_msg = '';
							   switch($lang){
								   case 'fr':
									   $err_msg = 'Veuillez réessayer';
									   $ok_msg = 'Question envoyée';
									   break;
								   case 'nl':
									   $err_msg = 'Probert u nog een keer';
									   $ok_msg = 'Vraag gestuurd';
									   break;
								   case 'en':
									   $err_msg = 'Please retry';
									   $ok_msg = 'Question sent successfully';
									   break;
								   default:
									   $err_msg = '_Language not found_';
							   }
							   if(isset($_GET['err'])){
								   echo "<div class='alert alert-warning'><strong>{$_GET['err']}</strong>&emsp;$err_msg</div>";
							   }elseif (isset($_GET['sent']) && $_GET['sent']){
								   echo "<div class='alert alert-success'>$ok_msg</div>";
							   }
					?>
				</div>
			</div>
		</div>
		<?php include "includes/footer.php" ?>
		<script>
			var lang = "<?php echo $lang ?>";
			var contents = {
				fr: ["Contactez-nous",
					 "Si vous préférez nous envoyer un e-mail normalement, envoyez le simplement à l'adresse suivante: ",
					 "Vous pouvez également nous contacter grâce au formulaire ci-dessous si vous avez des questions concernant notre appartement",
					 "E-mail : (utilisé uniquement pour pouvoir vous répondre)",
					 "Message :",
					 "Envoyer"],
				nl: ["U kunt contakt met ons opnemen",
					 "Stuur een e-mail aan het volgende adres: ",
					 "Ook kunt u contakt met ons opnemen via het onderstaande formulier als u een vraag heeft met betrekking tot ons appartement",
					 "Emailadres : (dit wordt alleen gebruikt om u antwoord te sturen)",
					 "Bericht :",
					 "Stuuren"],
				en: ["Contact us",
					 "If you just want to send us an e-mail, feel free to contact us at the following address: ",
					 "You can also contact us if you have any question about the apartment with the form below",
					 "E-mail : (used only to be able to answer to your question)",
					 "Message :",
					 "Send"]
			};
			insertText(lang,contents);
		</script>
	</body>
</html>