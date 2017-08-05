<?php
$navbar = "<nav class='navbar navbar-default navbar-static-top'>
		<div class='navbar-header'>
			<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
				<span class='sr-only'>Toggle navigation</span>
				<span class='icon-bar'></span>
				<span class='icon-bar'></span>
				<span class='icon-bar'></span>
			</button>
			<a class='navbar-brand' href='http://g101.famillelachat.com'>Greppon 101, Thyon 2000</a>
		</div>
		<div id='navbar' class='collapse navbar-collapse'>
			<ul class='nav navbar-nav'>";

$contents = ['home' => '', 
			 'contact' => '', 
			 'agenda' => '',
			 'photos' => '']; //contents of the navbar
switch($lang){
	case 'fr':
		$contents['home'] = 'Accueil';
		$contents['about'] = 'À propos';
		$contents['contact'] = 'Nous contacter';
		$contents['agenda'] = 'Disponibilités de l\'appartement';
		$contents['photos'] = 'Photos de l\'appartement';
		break;
	case 'nl':
		$contents['home'] = 'Homepagina';
		$contents['about'] = 'Meer informatie';
		$contents['contact'] = 'Neem met ons contact';
		$contents['agenda'] = 'Beschikbaarheid van het appartement';
		$contents['photos'] = 'Photos van het appartement';
		break;
	case 'en':
		$contents['home'] = 'Homepage';
		$contents['about'] = 'About';
		$contents['contact'] = 'Get in touch with us';
		$contents['agenda'] = 'Availability of the apartment';
		$contents['photos'] = 'Photos of the apartment';
		break;
}
$page_name = basename($_SERVER['PHP_SELF']); //name of the php file the user is on
$page_active = ['index.php' => '',
			    'contact.php' => '',
			    'about.php' => '',
			    'agenda.php' => '',
			    'photos.php' => ''];
$page_active[$page_name] = 'active';

$navbar .= "<li class=".$page_active['index.php']."><a href='index.php?lang=$lang'>".$contents['home']."</a></li>
			<li class=".$page_active['about.php']."><a href='about.php?lang=$lang'>".$contents['about']."</a></li>
			<li class=".$page_active['contact.php']."><a href='contact.php?lang=$lang'>".$contents['contact']."</a></li>
			<li class=".$page_active['agenda.php']."><a href='agenda.php?lang=$lang'>".$contents['agenda']."</a></li>
			<li class=".$page_active['photos.php']."><a href='photos.php?lang=$lang'>".$contents['photos']."</a></li>
			</ul>
			<ul class='nav navbar-nav navbar-right'>";

//language switch
$lang_active = ['fr' => '',
			    'nl' => '',
			    'en' => ''];
$lang_active[$lang] = 'active';
$navbar .= "<li class=".$lang_active['fr']."><a href='$page_name?lang=fr'>Français</a></li>
			<li class=".$lang_active['nl']."><a href='$page_name?lang=nl'>Nederlands</a></li>
			<li class='".$lang_active['en']."' style='margin-right:15px'><a href='$page_name?lang=en'>English</a></li>";

$navbar .= "</ul></div></nav>"; //completion of the html above
echo $navbar;
?>
