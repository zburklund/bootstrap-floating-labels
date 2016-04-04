$(document).ready(function() {
	var currenttheme = $('#currtheme');
	var themelist = $('#themes+ul>li>a');
	var currentheading = $('#banner h1');
	var currenttitle = $('title');
	themelist.click(function() {
		currenttheme.attr("href",'./css/bootstrap'+this.name+'.min.css');
		currentheading.text(this.text+' Theme');
		currenttitle.text('Bootswatch: '+this.text);
	});

		
})