function email(eml) {
	document.write('<a href="'+emailconstring('mailto:'+eml,true)+'">'+emailconstring(eml,false)+'</a>');
}
function emailshort(eml,txt) {
	document.write('<a href="'+emailconstring('mailto:'+eml,true)+'">'+txt+'</a>');
}

function emailconstring(eml,dot) {
	eml=eml.replace(/ PUNKT /g,'.');
	eml=eml.replace(/ AT /g,'@');
	var j='';
	for(var i=0;i<eml.length;i++) {
		j=j+"&#"+eml.charCodeAt(i)+";";
	}
	return j;
}
