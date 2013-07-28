// Copyright Philipp Grozinger GRAPHITE 2013

function sendAnalytics(){
	var params = "gra=phite";
	for (var i = 0; i < document.getElementsByClassName('stats').length; ++i) {
		var item = document.getElementsByClassName('stats')[i].innerHTML;
		var itemNoComma = parseFloat(item.replace(/,/g, ''));
		params = params + "&" + i + "=" + itemNoComma;
	}
	window.location = "http://graphite.fhost.com.au/flipboard/index.php?" + params;
}

javascript:var params = "gra=phite"; for (var i = 0; i < document.getElementsByClassName('stats').length; ++i) {var item = document.getElementsByClassName('stats')[i].innerHTML; var itemNoComma = parseFloat(item.replace(/,/g, '')); params = params + "&" + i + "=" + itemNoComma;}; window.location = "http://graphite.fhost.com.au/flipboard/index.php?" + params;