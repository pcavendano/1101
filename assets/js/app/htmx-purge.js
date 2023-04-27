(function () {
	"use strict";
	window.addEventListener("load", (event) => {
		const qs = new URLSearchParams(window.location.search);
		const url = window.location.href.split("?")[0];
		const purge = qs.get("purge");
		if (!!purge) {
			localStorage.clear();
			setTimeout(() => {
				window.location.href = url;
			}, 100);
		}
	});
})();
