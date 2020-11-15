<?php
#
# DEPURACION DE ERRORES
error_reporting(E_ERROR|E_WARNING);
ini_set('display_errors', '1');
#
# LIBRERIA CURL PARA ENVIAR JSON
include("../curl/clase_envia_json.php");
#
# CONFIGURACION DEL PUERTO 443 o 80
$FACTRONICA["CURL_PUERTO"]="443";
#
# ARRAY JSON CON DATOS DE NOTA DE CREDITO
$arregloJson = array(
"TOKEN" => "SUTOKENACCESO",
"RUTEMISOR"=>"11222333-4",
"ACCION" => "INSERTAR",
"DOCUMENTO"=>"NOTACREDITO",
"FOLIODTE"=>"",					// SI VA VACIO EL FOLIO LO ASIGNA LA API
"TIPODTE"=>"61",
"FECHADTE"=>"",					// SI LA FECHA VA VACIA LA API ASIGNA LA FECHA ACTUAL
"LLAVEDTE"=>"",
"FORMATO_PDF"=>"TICKET",
"RUTCLI" =>"76606716-6",
"RAZONSOCIAL" =>"FACTRONICA SPA",
"GIRO" =>"SERVICIOS INFORMATICOS",
"DIRECCION" =>"LAS BELLOTAS 199 OF.62",
"COMUNA" =>"PROVIDENCIA",
"CONTACTO" =>"PATRICIO DIAZ",
"CORREO" =>"CONTACTO@FACTRONICA.CL",
"TELEFONO" =>"56957231148",
"IDCONDVENTA" =>"1",
"IDMEDIOPAGO" =>"1",
"IDVENDEDOR" =>"1",
"VENTA_ANTICIPADA"=>"0",
"ID_PROYECTO"=>"1",
"IDSUCURSAL"=>"1",
"IDBODEGA"=>"1",
"TIPOTOTAL" => "0",
"NETO" => "10000",
"EXENTO" => "0",
"IVA" => "1900",
"TOTAL" => "11190",
"OBS" =>"CLIENTE DEVOLVIO EL PRODUCTO",
"MEDIOPAGOTEXTO"=>array("EFECTIVO"),
"MEDIOPAGOMONTO"=>array("1190"),
"CODIGO"=>array("10001","10001","10001","10001","10001"),
"DESCRIPCION"=>array("PAPAS","PERAS","UVAS","DURAZNOS","LIMONES"),
"CANTIDAD"=>array("3","1","2","1","3"),
"UNDMED"=>array("kg.","kg.","kg.","kg.","kg."),
"UNITARIO"=>array("1000","1000","1000","1000","1000"),
"DESCUENTO_PORC"=>array("","","","",""),
"DESCUENTO_PESOS"=>array("","","","",""),
"SUBTOTAL"=>array("3000","1000","2000","1000","3000"),
"NroLinRef"=>"1",				// NUMERO DE REFERENCIA ( LINEA 1 )
"TpoDocRef"=>"39",				// DOCUMENTO AL CUAL REFERENCIA ( 39=BOLETA ELECTRONICA )
"IndGlobal"=>"0",				// SIEMPRE EN CERO ( SOLO APLICA PARA ANULAR FACTURAS )
"FolioRef"=>"1289",				// FOLIO DE LA BOLETA QUE ESTÁ ANULANDO
"FchRef"=>"2020-09-17",			// FECHA DE LA BOLETA QUE ESTÁ ANULANDO
"CodRef"=>"1",  				// 1=ANULABOLETA  2=CORRIGETEXTO   3=CORRIGEVALORES
"RazonRef"=>"Anula Boleta", 	// COMENTARIO INDICANDO MOTIVO DE LA ANULACIÓN
"SMTP_HOST"=>"smtp.nn.com",
"SMTP_PORT"=>"465",
"SMTP_SECURE"=>"ssl",
"SMTP_USER"=>"n@nn.cl",
"SMTP_PASS"=>"nn",
"CORREO_CC1"=>"nn@nn.com",
"CORREO_CC2"=>"nn@nn.cl",
"CORREO_BCC1"=>"nn@nn.com",
"CORREO_BCC2"=>"nn@nn.com",
"CORREO_RESPUESTA"=>"nn@nn.cl",
"PROVEEDOR_NOMBRE"=>"FACTRONICA SPA",
"PROVEEDOR_MAIL"=>"soporte@factronica.cl",
"PROVEEDOR_WEB"=>"www.factronica.cl",
"PROVEEDOR_FONO"=>"56957231148"
);
#
# URL DE DESTINO DEL SERVIDOR DE FACTURACIÓN ELECTRÓNICA
$url="https://servidor3.factronica.cl/api/venta_remota/recibe_json.php";
#
# ENVIAR JSON AL SERVIDOR
$retorno=JsonEnviar($arregloJson,$url);
#
# TRANSFORMAR LA RESPUESTA EN UN ARREGLO
$jsonArray  = json_decode($retorno,true);
#
# MOSTRAR LA RESPUESTA DE FORMA LEGIBLE
echo "<pre>";
var_dump($jsonArray);
echo "</pre>";
#
# TRANSFORMAR A TEXTO LEGIBLE LA URL PARA DESCARGAR EL PDF
$url_pdf=base64_decode($jsonArray["urlpdf"]);
#
# DESCARGAR PDF
echo "<br>Descargar Pdf Desde=".$url_pdf;
# 
#
?>
