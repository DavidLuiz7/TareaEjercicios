var edad;
edad = prompt("Introduccir edad (en numero): ");
edad = parseInt(edad);
if (edad<18)
{
	alert("Usted es menor de edad");
}else if (edad<65) {
	alert("Usted es adulto")
	}else{
	alert("Usted ya esta en edad de jubilacion");
}
