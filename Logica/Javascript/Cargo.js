function crear() {
	var url="/ProyectoBases2/Logica/Entidades/Cargo.php"
	var nombre = document.getElementById("nombreCargo").value;
	var salario = document.getElementById("salario").value;
	var info="opcion=crear&name=" + nombre + "&salario=" + salario;
	var xhr = new XMLHttpRequest();
	xhr.open("POST",url,true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			alert(xhr.responseText);
		}
	};
	xhr.send(info);
}

function editar(){
	var url="/ProyectoBases2/Logica/Entidades/Categoria.php"
	var nombre_categoria= document.getElementById("nombre");
	var nuevo_categoria= document.getElementById("nuevoNombre");
	var nombre= nombre_categoria.value;
	var nuevoNombre= nuevo_categoria.value;
	var info="opcion=editar&name="+nombre+"&newName="+nuevoNombre;
	var xhr = new XMLHttpRequest();
	xhr.open("POST",url,true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			alert(xhr.responseText);
		}
	};
	xhr.send(info);
}