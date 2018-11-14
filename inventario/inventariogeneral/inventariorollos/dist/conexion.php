<?

include ("adodb5/adodb.inc.php");
$conexion = &ADONewConnection(odbc_mssql);
$datos = "Driver=(SQL Server);Server=192.168.0.19;Database=PLASMARSA;";

$conexion->Connect($datos,'ofimatica','ofimatica');



?>