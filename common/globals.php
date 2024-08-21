<?php
function FechaProceso()
{
    //return date('Y-m-d H:i:s');
    //OFICIAL
    return '2024-08-01'; //Datos
}

function fechaDMY($fecha)
{
	if(!empty($fecha))
        return date('d/m/Y',strtotime($fecha));
	else
		return null;
}

function fechaDMY2($fecha)
{
    if(!empty($fecha))
        return date('d/m/Y H:i:s',strtotime($fecha));
    else
        return null;
}


?>