function enviar(){
	let clave = document.getElementById('clave').value;
	let valor= document.getElementsById('valor').value;

	localStorage.setItem(valor,clave);
}
function borrar(){
	localStorage.clear();
}
function listar(){
	let lis= document.createElement("ul");

    let divi= document.getElementById("list");

	for (var i = 0; i < localStorage.length; i++) {
		let clv= localStorage.key(i);
		let val= localStorage.getItem();

		let celda1 = document.createElement("li");
		celda1.innerHTML= clv+" "+val;

		lis.appendChild(celda1);

	}

	divi.appendChild(lis);


}