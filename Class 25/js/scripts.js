
var student = {
	"firstName"	: "Fahim",
	"lastName" 	: "Abdullah",
	"age"		: "23",
	"Location"	: "cox's bazar"
};

document.getElementById("data").innerHTML = ("First Name: " + student ["firstName"]);
document.getElementById("data2").innerHTML = ("Last Name: " + student ["lastName"]);
document.getElementById("data3").innerHTML = ("Age: " + student ["age"]);
document.getElementById("data4").innerHTML = ("Location: " + student ["Location"]);


document.getElementById("data").style.color = "white";
document.getElementById("data2").style.color = "white";
document.getElementById("data3").style.color = "white";
document.getElementById("data4").style.color = "white";

// <!-- Second part for conditin with function -->

function result () {
	var result = prompt("Input Your Exam Result Number");
		passmark = 33;

		if (result <0 || result > 100) {
			document.write ("Result Invelid");
		}

			else if (result >= 0 && result <= 33) {
		document.write("Student, Please study More For Standerd Result or Pass.");
	}

		else if (result >= 34 && result <= 39) {
		document.write("D");
			}
		else if (result >= 40 && result <= 49) {
				document.write("C");
			}
		else if (result >= 50 && result <= 59) {
				document.write("B");
			}
		else if (result >= 60 && result <= 69) {
				document.write("A-");
			}
		else if (result >= 70 && result <= 79) {
				document.write("A");
			}
		else {
			document.write("A+");
}
};


// second part close


// last part

function date() {
alert (Date());
};


