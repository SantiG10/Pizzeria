function validar(){
	var Nombre = document.f1.txtNombre.value;
	var Apellidos = document.f1.txtApellidos.value;
	var Id = document.f1.txtId.value;
	var Direccion = document.f1.txtDireccion.value;
	var Barrio = document.f1.txtBarrio.value;
	var Telefono = document.f1.txtTelefono.value;	
	var Email = document.f1.txtEmail.value;
	var Clave = document.f1.txtClave.value;
	var Clave2 = document.f1.txtClave2.value;	

	if(Nombre == "" || Apellidos == "" || Id == "" || Direccion == "" || Barrio == "" || 
		Telefono == "" || Email == "" || Clave == "" || Clave2 == ""){
		alert("Faltan Datos..!");
	} else if(isNaN(Id)){
		alert("La Identificacón Debe ser Numérica");
	}else if(isNaN(Telefono)){
		alert("El Telefono Debe ser Numérico");
	}else if(Clave != Clave2){
		alert("Contraseñas Diferentes..!");
	}else if(Clave.length < 8 || Clave2.length < 8){
		alert("Contraseña Mínima de 8 Caracteres");
	}else{
		document.f1.submit();
	}
}