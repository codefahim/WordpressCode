
function color (){

 document.getElementById("demo").style.color = "#ff0000";
 document.getElementById("demo2").style.color = "blue";
 document.getElementById("demo3").style.color = "black";
 document.getElementById("demo3").style.backgroundColor = "rgba(0, 191, 255, 0.6)";
 document.getElementById("demo2").style.backgroundColor = "rgba(135, 206, 250, 0.27)";


}





// var result = prompt(),
// 	passmark = 33;

// 	if (result >= 33 && result <= 100) {
// 		alert ("fahim pass marce");
// 	}

// 	else if (result <0 || result >100) {
// 		alert ("sir, Gaza kai asce");
// 	}

// else {
// 	alert ("fahim 000 korece");
// }



// var fahim = 10,
// 	karim = 20;

// 	alert(fahim+karim);


// Array is start from here

	// var x = { "ami": "fahim", "age":"40"};


	// alert( "amar Name: " + x ["ami"]);
	// alert( "amar Age: " + x ["age"]);


// Array is closed from here
// document.write("Kamal mie Koilo - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, voluptates." );


// var kamal = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, voluptates.";

// document.write("salai Gor Kailo: " + kamal.length);

// document.write(kamal.indexOf("ipsum"))


// function fahim() {
// 	alert("Hi!This is fahim")
// };

// fahim();


// function k() {
// 	return "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, facere!"
// }


// alert(k());

function result() {
var result = prompt ("Type Result Here to Know Grade");
	passmark = 33;

	if (result < 0 || result >100) {
		document.write("Result Invelid");
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
}



function fahim (x, y, z) {
	return x+y-z;
}

document.write(fahim (5, 10, 5));


var x= {"firstName": "fahim", "age":"35"}
alert(x.firstName);






