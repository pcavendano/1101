window.addEventListener("htmx:responseError", (event) => {
	console.log("crap! - " + event.detail.xhr.status);
	window.location.href = event.detail.xhr.responseURL;
});
