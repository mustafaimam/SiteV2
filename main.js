function myFunction() {
	//gets the element by the id name and replaces the text with superstar
	document.getElementById("name").innerHTML = "Superstar";
	setTimeout(newFunction2,1000);
	myFunction2();
}


function newFunction2(){ 
document.getElementById("name").innerHTML = "Mustafa Abdul Razaq";
}


