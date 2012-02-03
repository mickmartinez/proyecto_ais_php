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
