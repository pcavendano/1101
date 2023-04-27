class SiteMenu extends HTMLElement {
	constructor() {
		super();
		this.dataset.state = "false"
	}

	connectedCallback() {
		this.on = document.querySelector("#header button");
		this.off = document.querySelector("site-menu button");
		this.veil = this.querySelector(".veil");

		this.on.addEventListener("click", () => {
			this.state = true;
		});

		this.off.addEventListener("click", () => {
			this.state = false;
		});

		window.addEventListener("keydown", (event) => {
			if (event.key === "Escape" && this.state) {
				this.state = false;
			}
		});
	}

	set state(state) {
		this.dataset.state = state;
		if (state === true) {
			scrollOff();
		} else {
			scrollOn();
		}
	}

	get state() {
		return this.dataset.state;
	}

}
customElements.define("site-menu", SiteMenu);
