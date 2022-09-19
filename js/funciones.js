// JavaScript Document
function errorObligatorio(valor)
{
	if(valor.length>0)
	{
		return false;//Bien
	}
	else
	{
		return true;//Mal
	}
}
function errorLetrasYnumeros(valor)
{
	var patron=/\W/; //Busca cualquier caracter que no sea alfanumerico
	
	var respuesta_patron=patron.test(valor);
	
	return respuesta_patron;
}
function mensajeError(mensaje)
{
    $('#alerta').html(mensaje);
    $('#alerta').css('animation-name','alerta_animacion');
    $('#boton_inicio').attr('disabled','disabled');
    
    var movi=setInterval(function()
    {
       $('#alerta').css('animation-name','none'); 
        $('#boton_inicio').removeAttr('disabled');
        clearInterval(movi);
    },2500);

}



 



















