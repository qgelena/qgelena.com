var onsearch = function() {
	alert('search is not implemented yet, sorry');
};

var onpageload = function() {
	var search_btn = document.getElementsByName('submit')[0];
	search_btn.onclick = onsearch;

	if (location.search) {
		onsearch();
	}

	console.log('loaded!');
};