(function () {
	"use strict";
	const l = document.querySelector("#loading");
	l.addEventListener("transitionend", () => {
		l.remove();
	});
	window.addEventListener("load", () => {
		setTimeout(() => {
			document.body.dataset.loaded = true;
		}, 0);
	});
})();
