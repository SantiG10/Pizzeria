function validar() {
  var tipo_pizza     = document.f1.tipo_pizza.value;
  var tama_pizza     = document.f1.tama_pizza.value;
  var canti_pizza    = document.f1.canti_pizza.value;
  var tipo_entradas  = document.f1.tipo_entradas.value;
  var tama_entradas  = document.f1.tama_entradas.value;
  var canti_entradas = document.f1.canti_entradas.value;
  var tipo_postre    = document.f1.tipo_postre.value;
  var canti_postre   = document.f1.canti_postre.value;
  var tipo_bebida    = document.f1.tipo_bebida.value;
  var canti_bebida   = document.f1.canti_bebida.value;
  var entrega        = document.f1.entrega.value;

  if(tipo_pizza == "99" || tama_pizza == "99"|| canti_pizza == "99"
  	|| tipo_entradas =="99" || tama_entradas == "99" || canti_entradas == "99"
  	|| tipo_postre == "99" || canti_postre == "99" || tipo_bebida == "99"
  	|| canti_bebida == "99" || entrega == "99"){
  	alert("Faltan Datos..!");
  	} else {
  		document.f1.submit();
  	}
}
