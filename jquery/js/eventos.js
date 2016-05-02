var inicio = function()
{
	var clicBoton = function()
	{
		console.log("Clic del botón");
		$(".anuncioWeb").html("Clic del Botón");
		$(".anuncioWeb").append("Clic del Botón");		
	}

	var clicBoton2 = function()
	{
		alert("Botón 2");
	}
	var teclaUnInput = function(tecla)
	{
		if(tecla.which == 13)
		{
			//Que se posicione en otroInput
			$("#otroInput").focus();
		}
	}
	//Preparar los eventos
	//de todos mis objetos
	$("#miBoton").off("click",clicBoton);
	$("#miBoton").on("click",clicBoton2);
	$("#unInput").on("keypress",teclaUnInput);
}
//Main 
$(document).on("ready",inicio);  










