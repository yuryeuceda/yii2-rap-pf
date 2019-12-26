<?php

namespace common\components;

class WhiteList{
	
	var $wl_codigo				= "/^[0-9]{0,7}$/";
	var $wl_cuenta				= "/^[0-9_ -]{1,20}$/";
	var $wl_decimal				= "/[0-9]+(?:\.[0-9]*)?/";
	var $wl_alfa_numerico		= "/^[\w- ñÑáÁéÉíÍóÓúÚ,:.]{1,100}$/";
	var $wl_especial			= "/^[\w- ñÑáÁéÉíÍóÓúÚ\/,()|:+@.-]{1,2000}$/m"; /*m->Multilinea*/
	var $wl_cantidad			= "/^[0-9_.,|-]{1,20}$/"; 
	var $wl_dias				= "/^[0|1|2|3|4|5|6|7]$/";  
	var $wl_fecha_yyyy_mm_dd	= "/^\d{4}\-\d{2}\-\d{2}$/"; 
	var $wl_fecha_dd_mm_yyyy	= "/^\d{2}\/\d{2}\/\d{4}$/";
	var $wl_fecha_hora			= "/^\d{4}\-\d{2}\-\d{2}+(?: \d{2}:\d{2})?+(?::\d{2})?$/"; /* Y-m-d H:i:s   ó   Y-m-d H:i   ó   Y-m-d*/
	//var $wl_hora				= "/^(?:0?[1-9]|1[0-2]):[0-5][0-9]\s?(?:[aApP](\.?)[mM]\1)?$/";  /* Ejemplos: 3:14, 03:14,  12:27,  1:05am,  1:05a.m.,  1:05PM,  1:05P.M. */
	var $wl_arreglo				= "/^[\w- ñÑ,\/.|@$ 0-9_-]{1,400}$/";
	var $wl_direccion 			= "/^[\w- ñÑ,()|\/.:-]{1,150}$/";
	var $wl_correo				= "/^[\w- _;@.]{1,3000}$/"; 
	var $wl_link	 			= "/^[\w- _()|\/\.-]{1,150}$/";
	
	var $wl_user				="/^[\w-ñÑáÁéÉíÍóÓúÚ=]{1,30}$/"; 
	var $wl_pass				="/^[\wñÑáÁéÉíÍóÓúÚ¡!¿?\$%&*\+\-@:;\.,_=\"]{1,30}$/"; 
	
	var $mensaje="Error de ingreso";
	var $mensaje_bloqueo="Caracter no esperado o datos no aprobados por el filtro de seguridad\nPor seguridad se ha bloqueado el contenido de la pagina.";
	
	var $max_file_size			= 10485760; //10 MB = MB * KB * B = 10 * 1024 * 1024
	
} 
