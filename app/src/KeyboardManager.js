class KeyboardManager {
	static init() {
		$("html").keydown(function(event) {
			KeyboardManager.keyStates[event.which] = true;
		});

		$("html").keyup(function(event) {
			KeyboardManager.keyStates[event.which] = false;
		});

		$("html").mouseleave(function(event) {
			KeyboardManager.keyStates = {};
		});

		$("html").mouseenter(function(event) {
			KeyboardManager.keyStates = {};
		});
	}

	static quickFill() {
		return KeyboardManager.keyStates[70] === true;
	}
}

KeyboardManager.keyStates = {};
