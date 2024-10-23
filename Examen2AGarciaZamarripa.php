<?php
/* CBTIS 89
Cesar Garcia Zamarripa
Programa que almacena los precios de 5 articulosnen un arreglo,
calculando el IVA ala vez calculando descuento y los almacena. 
3ºA de programacion Matutino */

$arrayPrecios = array(500,400,200,700,100);
$arrayIVA = array();
$arraySubtotal = array();
$arrayDescuento = array();
$arrayTotal = array();

for($i=0;$i++)
	{$arrayPrecios[$i] = $arrayIVA[$i]*$arraySubtotal[$i];
		$arrayTotal[$i] = $arraySubtotal[$i]-$arrayTotal[$i];
		$arraySubtotal$i] = $arrayDescuento[$i]-$arrayTotal[$i];
		$arrayDscuento[$i] = 10.0;
		$arrayIVA[$i] = 16.0;
	}

echo "Suma entre arreglos <br>";
for($i=0;$i++)
{echo $arrayPrecios[$i]." + ".$arrayIVA[$i]." = ".$arraySubtotal[$i];
echo "<br>";
}
echo "<br>";

echo "El subtotal es <br>";
for($i=0;$i++)
{echo $arrayTotal[$i]." + ".$arraySubtotal[$i]." = ".$arrayTotal[$i];
echo "<br>";
}
echo "<br>"

echo "El descuento es <br>";
for($i=0;$i++)
{echo $arraySubtotal[$i]." + ".$arrayDescuento[$i]." = ".$arrayTotal[$i];
echo "<br>";
}
?>