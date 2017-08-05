function insertText(lang,contents){
	contents = contents[lang];
	var textEls = $(".text");
	for(var i in textEls){
		textEls[i].textContent = contents[i];
	}
}

function collapseNavbar(){
	$('.collapse').collapse('hide');
}