
let db;
let cmp1;
let cmp2;
let cmp3;

let cuerpoTabla;

window.onload= cargar;


function cargar(){
	//cargar el objeto para manejar la base de datos local
	let objetoBD = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB;
	let referenciaBD = objetoBD.open("ejemplo_bd",1);//le damos el nombre de la base de datos


	//referenciamos los elementos input del DOM
	cmp1=document.getElementById("campo1");
	cmp2=document.getElementById("campo2");
	cmp3=document.getElementById("campo3");

	//referenciamos al tbody de la tabla
	cuerpoTabla = document.getElementById("cuerpoTabla");

	//evente que se dispara si hay problemas al abrir la bd
	referenciaBD.onerror= function(){
		console.log("Error al abrir ejemplo_bd");
	}
	//evento que se dispara si abre correctamente
	referenciaBD.onsuccess= function(){
		console.log("Se abrio correctamente");

		//entrada del objeto que me permite manipular de la base de datos
		db = referenciaBD.result;
	}
	//evento que se dispara si la bd no existe o la version ("numero") coincide
	referenciaBD.onupgradeneeded = function(evento){
		//Se apunta a la base de datos nueva ("vacia")
		let dbNueva = evento.target.result;


		//creamos la tabla
		let tabla = dbNueva.createObjectStore('datos_tabla',{keyPath:'id',autoIncrement:true});
		//creamos los campos de la tabla
		tabla.createIndex('campo1','campo1',{unique:false});
		tabla.createIndex('campo2','campo2',{unique:false});
		tabla.createIndex('campo3','campo3',{unique:false});

		console.log("BD configurada");
	}
}

function guardar(){
	//guarda la informacion en la BD local con indexesDB

	//Crear un objeto con los datos del formulario
	let nuevoElemento ={campo1:cmp1.value, campo2:cmp2.value, campo3:cmp3.value};

	//Abrir una transaccion con la base de datos
	let transaccion = db.transaction(['datos_tabla'],'readwrite');

	//guardar la informacion en la base de datos
	let referenciaTabla = transaccion.objectStore('datos_tabla');
	let resultado = referenciaTabla.add(nuevoElemento);

	resultado.onsuccess = function(){
		cmp1.value="";
		cmp2.value="";
		cmp3.value="";
		console.log("Datos introducidos");
   }

   resultado.oncomplete = function(){
   	console.log("Operacion completada");
   }

   resultado.onerror = function(){
   	console.log("Error al introducir los datos");
   }
   listar();
}

function listar(){

	//borrar los elementos del tbody
	let listaFilas = cuerpoTabla.childNodes;
	for (var i = listaFilas.length -1; i >=0; i--) {
		listaFilas[i].remove();
	}

	//obtiene todos los datod de la bd local
	// y lo inserta en la tabla

	let tabla = db.transaction("datos_tabla").objectStore("datos_tabla");

	tabla.openCursor().onsuccess = function (evento){

		//recuperamos el cursor
		let cursor = evento.target.result;

		if(cursor){
			//recuperar los valores
			let valCmp1 = cursor.value.campo1;
			let valCmp2 = cursor.value.campo2;
			let valCmp3 = cursor.value.campo3;

			let indice = cursor.value.id;

			//crear la fila para la tabla
			let fila = document.createElement("tr");

			let celda1 = document.createElement("td");
			let celda2 = document.createElement("td");
			let celda3 = document.createElement("td");
			let celda4 = document.createElement("td");

			let boton = document.createElement("button");
			boton.setAttribute('onclick','borrar('+indice+')');
			boton.textContent ="Borrar";

			celda1.innerText = valCmp1;
			celda2.innerText = valCmp2;
			celda3.innerText = valCmp3;

			celda4.appendChild (boton);

			fila.appendChild(celda1);

			fila.appendChild(celda2);

			fila.appendChild(celda3);

			fila.appendChild(celda4);

			cuerpoTabla.appendChild(fila);



			//continua con la siguiente fila
			//mejor dicho,continua con el siguiente objeto de la coleccion
			cursor.continue();

		}else{
			console.log("fin del listado");
		}		
	}
}

function borrar(indice){
	//Abrir una transaccion con la base de datos
	let transaccion = db.transaction(['datos_tabla'],'readwrite');

	//guardar la informacion en la base de datos
	let referenciaTabla = transaccion.objectStore('datos_tabla');

	let resultado = referenciaTabla.delete(indice);

	resultado.onsuccess = function(){
		console.log("Elemento borrado");
	}
	listar();
}