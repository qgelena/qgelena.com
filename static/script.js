var onsearch = function() {
	alert('search is not implemented yet, sorry');
};

var onpageload = function() {
	var search_show = document.getElementById('search-show');
	var search_form = document.getElementById('search-form');
	var search_close = document.getElementById('search-close');
	search_show.onclick = function () {
		search_show.classList.remove('inline-tbl');
		search_show.classList.add('hidden');
		search_form.classList.remove('hidden');
		search_form.classList.add('inline-tbl')
	};
	search_close.onclick = function() {
		search_form.classList.remove('inline-tbl');
		search_form.classList.add('hidden');
		search_show.classList.remove('hidden');
		search_show.classList.add('inline-tbl');		
	}

	var search_btn = document.getElementsByName('submit')[0];
	search_btn.onclick = onsearch;

	if (location.search) {
		onsearch();
	}

	console.log('loaded!');
};

