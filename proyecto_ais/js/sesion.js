function Ajax(){
	
		var xmlhttp=false;
        try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
                try {
                   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                        xmlhttp = false;
                }
        }

        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
}
function MostrarConsulta(){
	
	   
	 var param1 = document.getElementById('usuario').value;
	 var param2 = document.getElementById('key').value;
	 //var password = /^([A-Z]|[a-z]){3}[0-9]{4}([A-Z]|[a-z]){3}$/;

	 //var b=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})+$/  
   
	 
	 //if (b.test(valor.value)){
		//if (password.test(clave.value)){
				divResultado = document.getElementById('resultado');
				ajax=Ajax();
				ajax.open("GET", "php/verificar.php?id="+param1+"&key="+param2,true);
				ajax.onreadystatechange=function() {
					if (ajax.readyState==4) {
							divResultado.innerHTML = ajax.responseText
					}
				}
				ajax.send(null);
			//window.location = "pag2.html";
				//return true;
		//	}else{
			 
		//		alert("Clave de Usuario No Valida");
		//		return false;
		//	}
		//}else{

		//	return false;
	// }
       
}
function buscarPaciente(){
	
	   
	 var param1 = document.getElementById('cedula').value;
	 //var password = /^([A-Z]|[a-z]){3}[0-9]{4}([A-Z]|[a-z]){3}$/;

	 //var b=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})+$/  
   
	 
	 //if (b.test(valor.value)){
		//if (password.test(clave.value)){
				divResultado = document.getElementById('resultado');
				ajax=Ajax();
				ajax.open("GET", "php/paciente.php?id="+param1,true);
				ajax.onreadystatechange=function() {
					if (ajax.readyState==4) {
							divResultado.innerHTML = ajax.responseText
					}
				}
				ajax.send(null);
			//window.location = "pag2.html";
				//return true;
		//	}else{
			 
		//		alert("Clave de Usuario No Valida");
		//		return false;
		//	}
		//}else{

		//	return false;
	// }
       
}
function GuardarCambios(){
	
	   
	var param1 = document.getElementById('id').value;
 	var param2 = document.getElementById('numero_historia').value;
	var param3 = document.getElementById('primer_nombre').value;
	var param4 = document.getElementById('segundo_nombre').value;
	var param5 = document.getElementById('primer_apellido').value;
	var param6 = document.getElementById('segundo_apellido').value;
	var param7 = document.getElementById('nombre_padre').value;
	var param8 = document.getElementById('nombre_madre').value;
	var param9 = document.getElementById('sexo').value;
	var param10 = document.getElementById('telefono').value;
	var param11 = document.getElementById('lugar_nacimiento').value;
	var param12 = document.getElementById('fecha_nacimiento').value;
	var param13 = document.getElementById('seguro_social').value;
	var param14 = document.getElementById('provincia').value;
	var param15 = document.getElementById('distrito').value;
	var param16 = document.getElementById('corregimiento').value;
	var param17 = document.getElementById('direccion').value;
	var param18 = document.getElementById('nombre_urgencias').value;
	var param19 = document.getElementById('parentesco_urgencias').value;
	var param20 = document.getElementById('telefono_urgencias').value;

				divResultado = document.getElementById('resultado2');
				ajax=Ajax();
				ajax.open("GET", "registro.php?id="+param1+"&numero_historia="+param2+"&primer_nombre="+param3+"&segundo_nombre="+param4+"&primer_apellido="+param5+"&segundo_apellido="+param6+"&nombre_padre="+param7+"&nombre_madre="+param8+"&sexo="+param9+"&telefono="+param10+"&lugar_nacimiento="+param11+"&fecha_nacimiento="+param12+"&seguro_social="+param13+"&provincia="+param14+"&distrito="+param15+"&corregimiento="+param16+"&direccion="+param17+"&nombre_urgencias="+param18+"&parentesco_urgencias="+param19+"&telefono_urgencias="+param20,true);
				ajax.onreadystatechange=function() {
					if (ajax.readyState==4) {
							divResultado.innerHTML = ajax.responseText
					}
				}
				ajax.send(null);

       
}

