function isNumeric(string) {
	return /^[0-9]*$/.test(string);
}

const input = ["tp", "fn", "fp", "tn"];

function validateForm() {
	var i = 0;
	var r; // return value
	var error = 0;
	while (i < input.length) {
		var ii = input[i];
		console.log(ii);
		var value = document.forms["form"][ii].value;
		console.log(value);
		var element = document.getElementById("check-" + ii);
		if (isNumeric(value)) {
			if (parseInt(value) >= 0) {
				element.innerHTML = "Good input :))";
			} else {
				element.innerHTML = "This is a negative input!";
				error++;
			}
		} else {
			element.innerHTML = "This is not a numeric input!";
			error++;
		}
		i++;
	}
	console.log("Error: " + error);
	if (error == 0) {
		console.log("good");
		r = true;
	} else {
		console.log("false");
		r = false;
	}
	return r;
}
