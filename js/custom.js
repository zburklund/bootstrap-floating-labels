$(document).ready(function() {
	var currenttheme = $('#currtheme');
	var themelist = $('#themes+ul>li>a');
	var currentheading = $('#banner h1');
	var currenttitle = $('title');
	var currentlogo = $('a.navbar-brand');
	themelist.click(function(){
		currenttheme.attr("href",'./css/bootstrap'+this.name+'.min.css');
		currentheading.text(this.text+' Theme Form Inputs');
		currenttitle.text('Bootswatch: '+this.text);
		currentlogo.text('Bootswatch: '+this.text);
	});
	currentlogo.mouseover(function(){
		currentlogo.text('Default Bootstrap');
	});
	currentlogo.mouseout(function(){
		currentlogo.text(currenttitle[0].text);
	});

		
})