(function () {
	"use strict";
	const sel = ".block";
	const Observer = new IntersectionObserver((entries) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				entry.target.classList.add("_i");
			} else {
				entry.target.classList.remove("_i");
			}
		});
	});	

	const Watch = function () {
		if (sel) {
			document.querySelectorAll(sel).forEach((el) => {
				Observer.observe(el);
			});			
		}
	};	
	const ObserveMutation = function () {
		let Mutation = new MutationObserver(Watch);
		Mutation.observe(document.body, { childList: true, subtree: true });
	};
	Watch();
	ObserveMutation();
})();
