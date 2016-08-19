<?php
##############################################################
####### DATOS DEL SERVIDOR
##############################################################
# URL DEL WEBSERVICE SERVIDOR EJ. http://www.factronica.cl/factronica_webservice_servidor_beta
$CONFACTRONICA["URLHOST"]="http://190.107.177.194/~ws760578134/servidor001";
# SCRIPT DEL SERVIDOR EJ. index.php
$CONFACTRONICA["URLFILE"]="index.php";
# PUERTO DE COMUNICACION ej.80
$CONFACTRONICA["PORT"]="80";
# DEPURAR ej. 1
$CONFACTRONICA["VERBOSE"]=1;
# RETORNAR RESULTADOS ej. 1
$CONFACTRONICA["RETURNTRANSFER"]=1;
# TIEMPO MAXIMO ESPERA ej.30
$CONFACTRONICA["TIMEOUT"]=30;
# ENCABEZADO DEL ENVIO ej. 0
$CONFACTRONICA["HEADER"]=0; 
# ENVIAR ENCABEZADO EJ. true
$CONFACTRONICA["HEADER_OUT"]=true;
##############################################################                                                 
#######   PARAMETROS DE CONFIGURACIÓN                                                                          
##############################################################                                                 
#                                                                                                              
# AMBIENTE A UTILIZAR DEL SII 1=PRODUCCION 0=PRUEBA (CERTIFICACION)                                            
$sw_produccion="0";                                                                                            
#                                                                                                              
# ENVIAR MAIL CON XML Y PDF AL CORREO DE INTERCAMBIO REGISTRADO EN EL SII 1=SI 0=NO                            
$sw_enviar_intercambio="0";                                                                                    
#                                                                                                              
# ENVIAR XML AL SII 0=NO 1=SI                                                                                  
$sw_enviar_sii="0";                                                                                            
#                                                                                                              
# ENVIAR MAIL CON XML AL EMISOR 1=SI 0=NO                                                                      
$sw_enviar_emisor="1";                                                                                         
#                                                                                                              
# ENVIAR MAIL CON XML AL RECEPTOR 1=SI 0=NO                                                                    
$sw_enviar_receptor="1";                                                                                       
#                                                                                                              
# SISTEMA OPERATIVO DEL SERVIDOR LINUX - WINDOWS                                                               
$separador_carpetas="LINUX";                                                                                   
#                                                                                                              
# URL DEL LOGO A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png  120X120 PIXELS                      
$url_logo="";// utilizar url normal sin https ni url corta          https://goo.gl/t2ljAK";                                                              
#                                                                                                              
# URL DEL LOGO CENTRAL A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png  240X240 PIXELS              
$url_logo_central="";                                                                                          
#                                                                                                              
# INDICA LA CANTIDAD DE DECIMALES A MOSTRAR EN EL PDF Y XML                                                    
$decimales_item_unitario="0";                                                                                  
#                                                                                                              
# INDICA LA CANTIDAD DE ESPACIADO ENTRE CADA LINEA DEL DETALLE                                                 
$espaciado_items="7";                                                                                          
#                                                                                                              
# NOMBRE DEL PROVEEDOR DE FACTURA ELECTRONICA QUE APARECE AL PIE DEL PDF                                       
$nom_proveedor="FACTRONICA";                                                                                   
#                                                                                                              
# RUL DEL PROVEEDOR DE FACTURA ELECTRONICA QUE APARECE AL PIE DEL PDF                                          
$url_proveedor="";                                                                            
                                                                                                               
                                                                                                               
##############################################################                                                 
####### NOMBRES DIRECTORIOS DE ALMACENAMIENTO LOCAL Y REMOTO                                                   
##############################################################                                                 
# NOMBRE DE LA CARPETA LOCAL DE ALMACENAMIENTO                                                                 
$CONFACTRONICA["FOLDERPDF"]="almacen_local";                                                                   
# NOMBRE DE LA CARPETA REMOTA DE ALMACENAMIENTO                                                                
$CONFACTRONICA["FOLDERFILES"]="almacen_remoto";                                                                
                                                                                                               
                                                                                                               
##############################################################                                                 
#######                                                                                                        
##############################################################                                                 
# NOMBRE DEL ARCHIVO PLANO QUE ESTA ENVIANDO                                                                   
$CONFACTRONICA["FILETXT"]="envio_dte.txt";                                                                     
                                                                                                               
                                                                                                               
##############################################################                                                 
#######                                                                                                        
##############################################################                                                 
# NOMBRE QUE SE LE QUIERE DAR EL ARCHIVO PDF                                                                   
$CONFACTRONICA["FILEPDF"]="PDF_RUT89428000-K_TIPO33_FOLIO38.pdf";
# NOMBRE QUE SE LE QUIERE DAR EL ARCHIVO PDF                                                                   
$CONFACTRONICA["FILEPDFCLIENTE"]="PDFC_RUT89428000-K_TIPO33_FOLIO38.pdf";
# NOMBRE DEL ARCHIVO PNG CON LA IMAGEN DEL PDF417 (TED) TIMBRE ELECTRONICO SII CHILE                           
$CONFACTRONICA["FILEPNG"]="PDF4189428000-K_TIPO33_FOLIO38.png";
# NOMBRE DEL ARCHIVO XML CON LA RESPUESTA DEL SII (TRACKID)                                                    
$CONFACTRONICA["TRACKID"]="TRACKID_RUT89428000-K_TIPO33_FOLIO38.xml";
                                                                                                               
                                                                                                               
                                                                                                               
##############################################################                                                 
####### NOMBRE DE ARCHIVOS XML POR FIRMAR                                                                      
##############################################################                                                 
# NOMBRE DEL ARCHIVO DEL DTE POR FIRMAR                                                                        
$CONFACTRONICA["DTEPORFIRMAR"]="DTEPORFIRMAR_RUT89428000-K_TIPO33_FOLIO38.xml";
# NOMBRE DEL ARCHIVO DEL SET POR FIRMAR                                                                        
$CONFACTRONICA["SETDTEPORFIRMAR"]="SETPORFIRMAR_RUT89428000-K_TIPO33_FOLIO38.xml";
                                                                                                               
                                                                                                               
##############################################################                                                 
####### NOMBRE DE ARCHIVOS XML FIRMADOS                                                                        
##############################################################                                                 
# NOMBRE DEL ARCHIVO DEL DTE FIRMADO                                                                           
$CONFACTRONICA["DTEFIRMADO"]="DTEFIRMADO_RUT89428000-K_TIPO33_FOLIO38.xml";
# NOMBRE DEL ARCHIVO DEL SET FIRMADO Y QUE SE ENVIARÁ AL CLIENTE AL MAIL INTERCAMBIO                           
$CONFACTRONICA["SETDTEFIRMADO_CLIENTE"]="SETFIRMADOCLIENTE_RUT89428000-K_TIPO33_FOLIO38.xml";
# NOMBBRE DEL ARCHIVO DEL SET FIRMADO Y QUE SE ENVIARA AL SII POR MEDIO DE WEBSERVICES                         
$CONFACTRONICA["SETDTEFIRMADO_SII"]="SETFIRMADOSII_RUT89428000-K_TIPO33_FOLIO38.xml";
                                                                                                               
                                                                                                               
                                                                                                               
##############################################################                                                 
#######   CARATULA                                                                                             
##############################################################                                                 
#                                                                                                              
# RUT DEL CONTRIBUYENTE EMISOR                                                                                 
$caratula["RutEmisor"]="76057813-4";
#                                                                                                              
# RUT AUTORIZADO A ENVIAR DTES AL SII SIEMPRE ES RUT DE PERSONA NO DE EMPRESA                                  
$caratula["RutEnvia"]="11848319-7";
#                                                                                                              
# RUT DEL SII 60803000-K (SIEMPRE VA AQUI EL RUT DEL SII)                                                      
$caratula["RutReceptor"]="60803000-K";                                                                         
#                                                                                                              
# FECHA DE RESOLUCIÓN DE INICIO EN FACTURA ELECTRONICA                                                         
$caratula["FchResol"]="2014-08-22";
#                                                                                                              
# CERTIFICACION NUM=CERO                                                                                       
$caratula["NroResol"]="80";
#                                                                                                              
# NOMBRE SUCURSAL SII                                                                                          
$caratula["SucSii"]="PUNTA ARENAS";
#                                                                                                              
##############################################################                                                 
#######   ENCABEZADO                                                                                           
##############################################################                                                 
#                                                                                                              
# FECHA DE EMISIÓN                                                                                             
$IdDoc["FchEmis"]="2016-08-05";
#                                                                                                              
# FECHA DE VENCIMIENTO AAAA-MM-DD                                                                              
$IdDoc["FchVenc"]="2016-08-05";
#                                                                                                              
# TEXTO CON FORMA DE PAGO                                                                                      
$IdDoc["TermPagoGlosa"]="CONTADO";
#                                                                                                              
# TIPO DE DOCUMENTO FV=33, ND=56, NC=61                                                                        
$IdDoc["TipoDTE"]="33";
#                                                                                                              
# FOLIO DEL DOCUMENTO                                                                                          
$IdDoc["Folio"]="38";
#                                                                                                              
# PARA USO EN GUIA DESPACHO                                                                                    
$IdDoc["TipoDespacho"]="";
#                                                                                                              
# PARA USO EN GUIA DESPACHO                                                                                    
$IdDoc["IndTraslado"]="";
#                                                                                                              
# INDICADOR DE LINEAS EN VALORES BRUTOS 1=SI 0=NO                                                              
$IdDoc["MntBruto"]="1";
                                                                                                               
##############################################################                                                 
#######   EMISOR                                                                                               
##############################################################                                                 
#                                                                                                              
# RUT EMISOR                                                                                                   
$Emisor["RUTEmisor"]="76057813-4";
#                                                                                                              
# RAZON SOCIAL EMISOR                                                                                          
$Emisor["RznSoc"]="T Y S CHILE ";//T&S CHILE";
#                                                                                                              
# GIRO EMISOR                                                                                                  
$Emisor["GiroEmis"]="LETREROS, DISEÑOS.";
#                                                                                                              
# CODIGO PRINCIPAL DE ACTIVIDAD COMERCIAL                                                                      
$Emisor["Acteco"]="202900";
#                                                                                                              
# CODIGO DE LA SUCURSAL DEL SII                                                                                
$Emisor["CdgSIISucur"]="12205";
#                                                                                                              
# DIRECCION EMISOR                                                                                             
$Emisor["DirOrigen"]="SEÑORET NRO 102";
#                                                                                                              
# COMUNA EMISOR                                                                                                
$Emisor["CmnaOrigen"]="PUNTA ARENAS";
#                                                                                                              
# CIUDAD EMISOR                                                                                                
$Emisor["CiudadOrigen"]="PUNTA ARENAS";
#                                                                                                              
# EMAIL EMISOR                                                                                                 
$Emisor["CorreoEmisor"]="ventas1@tsletreros.cl";
#                                                                                                              
# WEB EMISOR                                                                                                   
$Emisor["Web"]="www.tsletreros.cl";
#                                                                                                              
# FONO EMISOR                                                                                                  
$Emisor["Telefono"]="+56 61 2218092";
#                                                                                                              
##############################################################                                                 
#######   RECEPTOR                                                                                             
##############################################################                                                 
#                                                                                                              
# RUT RECEPTOR                                                                                                 
$Receptor["RUTRecep"]="89428000-K";
#                                                                                                              
# RAZON SOCIAL RECEPTOR                                                                                        
$Receptor["RznSocRecep"]="AEROVIAS DAP S. A.";
#                                                                                                              
# GIRO RECEPTOR                                                                                                
$Receptor["GiroRecep"]="TRANSPORTE AEREO DE CARGA Y PA";
#                                                                                                              
# DIRECCION RECEPTOR                                                                                           
$Receptor["DirRecep"]="O HIGGINS 891";
#                                                                                                              
# COMUNA RECEPTOR                                                                                              
$Receptor["CmnaRecep"]="PUNTA ARENAS";
#                                                                                                              
# CIUDAD RECEPTOR                                                                                              
$Receptor["CiudadRecep"]="PUNTA ARENAS";
#                                                                                                              
# CONTACTO RECEPTOR                                                                                            
$Receptor["Contacto"]="juan perez";//"";
#                                                                                                              
# CORREO RECEPTOR                                                                                              
$Receptor["CorreoRecep"]="contacto@factronica.cl";
#                                                                                                              
                                                                                                               
##############################################################                                                 
#######   IMPUESTOS ADICIONALES  (TOTALIZADORES POR TIPO)                                                      
##############################################################                                                 
#                                                                                                              
# TIPO DE IMPUESTO 27                                                                                          
#$ImptoReten["27"]["TipoImp"]="27";                                                                            
#$ImptoReten["27"]["TasaImp"]="23";                                                                            
#$ImptoReten["27"]["MontoImp"]="34456";                                                                        
#                                                                                                              
# TIPO DE IMPUESTO 271                                                                                         
#$ImptoReten["271"]["TipoImp"]="271";                                                                          
#$ImptoReten["271"]["TasaImp"]="18";                                                                           
#$ImptoReten["271"]["MontoImp"]="77777";                                                                       
                                                                                                               
                                                                                                               
##############################################################                                                 
#######   TOTALES                                                                                              
##############################################################                                                 
#                                                                                                              
# TASA DE IMPUESTO                                                                                             
$Totales["TasaIVA"]="19";
#                                                                                                              
# NETO AFECTO                                                                                                  
$Totales["MntNeto"]="12033";
#                                                                                                              
# NETO EXENTO                                                                                                  
$Totales["MntExe"]="0";
#                                                                                                              
# MONTO IVA                                                                                                    
$Totales["IVA"]="2286";
#                                                                                                              
# MONTO TOTAL BRUTO                                                                                            
$Totales["MntTotal"]="14319";
#                                                                                                              
##############################################################                                                 
#######   DESCUENTOS GLOBALES                                                                                  
##############################################################                                                 
#$DscRcgGlobal["1"]["NroLinDR"]="1";                                                                           
#$DscRcgGlobal["1"]["TpoMov"]="D"; // D=DESCUENTO R=RECARGO                                                    
#$DscRcgGlobal["1"]["GlosaDR"]="Descuento Global";                                                             
#$DscRcgGlobal["1"]["TpoValor"]="%"; // tipo descuento %=en porcentaje                                         
#$DscRcgGlobal["1"]["ValorDR"]="50"; // descuento en porcentaje                                                
#$DscRcgGlobal["1"]["ValorDROtrMnda"]="500000";  // descuento en pesos                                         
#$DscRcgGlobal["1"]["IndExeDR"]="0";// 0=descuento a items afectos 1=descuento a items exentos                 
                                                                                                               
                                                                                                               
                                                                                                               
                                                                                                               
##############################################################                                                 
#######    DETALLE                                                                                             
##############################################################                                                 
#                                                                                                              
#                                                                                                              
$detalle["1"]["NroLinDet"]="1";
$detalle["1"]["NmbItem"]="";
$detalle["1"]["DscItem"]="BOTELLA DE AGUA 900CC. AZUL";
$detalle["1"]["TpoCodigo"]="INT1";
$detalle["1"]["UnmdItem"]="UNI";
$detalle["1"]["QtyItem"]="43";
$detalle["1"]["VlrCodigo"]="BA900-A";
$detalle["1"]["PrcItem"]="333";
$detalle["1"]["CodImpAdic"]="";
$detalle["1"]["MontoItem"]="333";
$detalle["1"]["DescuentoPct"]="0";
$detalle["1"]["DscItemPesos"]="0";
$detalle["1"]["IndExe"]="0";

                                                                                                               
                                                                                                               
                                                                                                               
##############################################################                                                 
#######    REFERENCIAS                                                                                         
##############################################################                                                 
#$doc_referencia["1"]["FolioRef"]="12321";                                                                     
#$doc_referencia["1"]["TpoDocRef"]="801";                                                                      
#$doc_referencia["1"]["RazonRef"]="Orden de Compra";                                                           
#$doc_referencia["1"]["CodRef"]="";# SOLO APLICA A NOTAS DE CREDITO Y DEBITO                                   
#$doc_referencia["1"]["FchRef"]="2016-04-28";                                                                  
                                                                                                               
##############################################################                                                 
#######   DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA                                                       
##############################################################                                                 
#                                                                                                              
#                                                                                                              
# MODULO DEL CERTIFICADO                                                                                       
$certificado["Modulus"]="25M946l8R4x/8I/CvY5ZWUowngAmi2g/ACUOPL9yOvMuRJymHoVRY2cl+bIzirjI
S09xOouvXL5lv5QzQiz/lkeF4fyWgisW+WEx/67oGbumUcqD1H1NFVYlg0Dd3Gw1
vYTsRWa9XMBgAzaHktGEgaFegsVm/Hze0sjn52KRnXk=
";
#                                                                                                              
#                                                                                                              
# EXPONENTE DEL CERTIFICADO                                                                                    
$certificado["Exponent"]="AQAB
";
#                                                                                                              
#                                                                                                              
# CERTIFICADO X509                                                                                             
$certificado["X509Certificate"]="MIIGSzCCBTOgAwIBAgIKHynmewAAAASOcTANBgkqhkiG9w0BAQUFADCB0jELMAkG
A1UEBhMCQ0wxHTAbBgNVBAgTFFJlZ2lvbiBNZXRyb3BvbGl0YW5hMREwDwYDVQQH
EwhTYW50aWFnbzEUMBIGA1UEChMLRS1DRVJUQ0hJTEUxIDAeBgNVBAsTF0F1dG9y
aWRhZCBDZXJ0aWZpY2Fkb3JhMTAwLgYDVQQDEydFLUNFUlRDSElMRSBDQSBGSVJN
QSBFTEVDVFJPTklDQSBTSU1QTEUxJzAlBgkqhkiG9w0BCQEWGHNjbGllbnRlc0Bl
LWNlcnRjaGlsZS5jbDAeFw0xNjA3MjUxMzQxNDNaFw0xOTA3MjUxMzQxNDNaMIHO
MQswCQYDVQQGEwJDTDEvMC0GA1UECAwmTUFHQUxMQU5FUyBZIERFIExBIEFOVMOB
UlRJQ0EgQ0hJTEVOQSAxEzARBgNVBAcTCk1hZ2FsbGFuZXMxFDASBgNVBAoTC3Rz
IGxpbWl0YWRhMRUwEwYDVQQLEwxjb250YWJpbGlkYWQxKDAmBgNVBAMTH3Zlcm9u
aWNhIHBhbWVsYSAgdG9ycmVzIGFsY2FsbGExIjAgBgkqhkiG9w0BCQEWE3NtYXJ0
aW5lekBjb2FzZXMuY2wwgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBANuTPeOp
fEeMf/CPwr2OWVlKMJ4AJotoPwAlDjy/cjrzLkScph6FUWNnJfmyM4q4yEtPcTqL
r1y+Zb+UM0Is/5ZHheH8loIrFvlhMf+u6Bm7plHKg9R9TRVWJYNA3dxsNb2E7EVm
vVzAYAM2h5LRhIGhXoLFZvx83tLI5+dikZ15AgMBAAGjggKnMIICozA9BgkrBgEE
AYI3FQcEMDAuBiYrBgEEAYI3FQiC3IMvhZOMZoXVnReC4twnge/sPGGBmucVhq/g
FQIBZAIBBDAdBgNVHQ4EFgQUZLN8HpokN8QJj7EZnGPz3/rC2scwCwYDVR0PBAQD
AgTwMB8GA1UdIwQYMBaAFHjhPp/SErN6PI3NMA5Ts0MpB7NVMD4GA1UdHwQ3MDUw
M6AxoC+GLWh0dHA6Ly9jcmwuZS1jZXJ0Y2hpbGUuY2wvZWNlcnRjaGlsZWNhRkVT
LmNybDA6BggrBgEFBQcBAQQuMCwwKgYIKwYBBQUHMAGGHmh0dHA6Ly9vY3NwLmVj
ZXJ0Y2hpbGUuY2wvb2NzcDAjBgNVHREEHDAaoBgGCCsGAQQBwQEBoAwWCjExODQ4
MzE5LTcwIwYDVR0SBBwwGqAYBggrBgEEAcEBAqAMFgo5NjkyODE4MC01MIIBTQYD
VR0gBIIBRDCCAUAwggE8BggrBgEEAcNSBTCCAS4wLQYIKwYBBQUHAgEWIWh0dHA6
Ly93d3cuZS1jZXJ0Y2hpbGUuY2wvQ1BTLmh0bTCB/AYIKwYBBQUHAgIwge8egewA
QwBlAHIAdABpAGYAaQBjAGEAZABvACAARgBpAHIAbQBhACAAUwBpAG0AcABsAGUA
LgAgAEgAYQAgAHMAaQBkAG8AIAB2AGEAbABpAGQAYQBkAG8AIABlAG4AIABmAG8A
cgBtAGEAIABwAHIAZQBzAGUAbgBjAGkAYQBsACwAIABxAHUAZQBkAGEAbgBkAG8A
IABoAGEAYgBpAGwAaQB0AGEAZABvACAAZQBsACAAQwBlAHIAdABpAGYAaQBjAGEA
ZABvACAAcABhAHIAYQAgAHUAcwBvACAAdAByAGkAYgB1AHQAYQByAGkAbzANBgkq
hkiG9w0BAQUFAAOCAQEAVnfgK1xR4AvyZeamjjZjFPStvhl88E8zz6jaxXLlFNDd
7kAGpXPqfvCu5KNxHjQbJWiuSarh7XlW5HbTkQBenl0KQNvBjsQrvzBDj5HD8eo/
+11yx6q1iu+rwEFgbn3b+ipoajFNMgib3kP1ZKn2uZac44pjiYjHT+sDt2vtrYUw
dHOWnoUV+lNNKKsfI0OTqQDvFQ5dasp+GhypO3LNGWfC5S9PZi246Q4/6HyXdF+U
2DHgwUO0j729nP/SZ/w8G6GpJtsG8swp6TcLrftVTEyOlwya37O6bZGFJYHSzmMR
/sppfb06gH1y+ONIYiyTPtjYJpPt8dMV/KVE/JW5uw==";
#                                                                                                              
#                                                                                                              
# LLAVE PRIVADA SIN CLAVE                                                                                      
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIICXQIBAAKBgQDbkz3jqXxHjH/wj8K9jllZSjCeACaLaD8AJQ48v3I68y5EnKYe
hVFjZyX5sjOKuMhLT3E6i69cvmW/lDNCLP+WR4Xh/JaCKxb5YTH/rugZu6ZRyoPU
fU0VViWDQN3cbDW9hOxFZr1cwGADNoeS0YSBoV6CxWb8fN7SyOfnYpGdeQIDAQAB
AoGBALYUsbu6bi6+2dFYxXp/MqSSmyJKqavs9GFgWSAS+dzcj7+hzzd8AnPVs24O
UiN0+9NHu3N7Jh5YXPOzJ5Z2zjH8aoJB2UWyXf4iM3Uio8e2MFG5/RiaYid0PY0I
+a70vpMIc2sxjUs8dqTOdBUBhNHKJnhAPLkDvNRR36R1X/EBAkEA/SVP5NvDhRkq
Yhb9W8Xvq1S6qVW9XHHCeBa55Wj6vLEQNdk8Flt3zt+mWY3saeizJSpqXsKGCHm0
6qehsIugEQJBAN4NB8xmgz2UI5QQkG6yARdppJJ0ptcrrVr6HrqbQQ22emIHC4OT
DzUnr2pOfV5DgXaFdq8ki9t2de723ID8DukCQQCNW2yFq4I+rJLSO2w29wyia6ng
LRSUrqGdVXNw+3IoM+eNakT3ZxQ73P+TOoEtkteWhVzolU8rJGs2LW1InG9BAkBT
hZ04Uhrtb6pOSEi7inMEpnUDraMP7lrfjJNAZ6N5j/jKpJG9JPSkbs/5cZqQeV3a
AeuZh2qf2xgTEYHxdl35AkBRoBTl+zYP89XA+15foXQzLfLuTCeA3bWlMdgpVpeM
Dj8kJefDsk1wryMlF7SPBXxAEIrTYUR91wgj21b5DYSK
-----END RSA PRIVATE KEY-----";
                                                                                                               
                                                                                                               
                                                                                                               
                                                                                                               
##############################################################                                                 
#######   CARGAR DATOS DE TIMBRAJE DE FOLIOS                                                                   
##############################################################                                                 
# RUT EMISOR                                                                                                   
$CAF["RE"]="76057813-4";
#                                                                                                              
#                                                                                                              
# RAZON SOCIAL EMISOR                                                                                          
$CAF["RS"]="T Y S LIMITADA";
#                                                                                                              
#                                                                                                              
# TIPO DE DOCUMENTO                                                                                            
$CAF["TD"]="33";
#                                                                                                              
#                                                                                                              
# FOLIO DESDE                                                                                                  
$CAF["RNG_D"]="1";
#                                                                                                              
#                                                                                                              
# FOLIO HASTA                                                                                                  
$CAF["RNG_H"]="80";
#                                                                                                              
#                                                                                                              
# FECHA AUTORIZACION TIMBRAJE                                                                                  
$CAF["FA"]="2016-07-29";
#                                                                                                              
#                                                                                                              
# MODULO LLAVE PRIVADA TIMBRAJE                                                                                
$CAF["RSAPK_M"]="oLg1fXeWla8+UCYiRF2TjJaUMtsjE8B1iAhft89Z+nt28X/ZirKjLelHtLziOxPEqvhJZcC3mLTlUZmhUNn4FQ==";
#                                                                                                              
#                                                                                                              
# MODULO EXPONENTE TIMBRAJE                                                                                    
$CAF["RSAPK_E"]="Aw==";
#                                                                                                              
#                                                                                                              
# INDICE DEL TIMBRAJE                                                                                          
$CAF["RSAPK_IDK"]="300";
#                                                                                                              
#                                                                                                              
# FIRMA DEL TIMBRAJE                                                                                           
$CAF["FRMA"]="m3Fbb+Qkb25+kbAwtU7Z9usUEv+yE4SV58PsLCWEHt1WJQNJGoIuGo86NhhyLCLqFRgHO1OC/u0o74LIRRifIg==";
#                                                                                                              
#                                                                                                              
# LLAVE PRIVADA DEL TIMBRAJE                                                                                   
$CAF["RSASK"]="-----BEGIN RSA PRIVATE KEY----- MIIBOQIBAAJBAKC4NX13lpWvPlAmIkRdk4yWlDLbIxPAdYgIX7fPWfp7dvF/2Yqy oy3pR7S84jsTxKr4SWXAt5i05VGZoVDZ+BUCAQMCQGsleP5PubkffuAZbC2Tt7MP DXc8wg0q+QVa6nqKO/xRQM1X61tOVmUMAgvdjxd39wBLQjCs0VACVcb9Ay11EvMC 
IQDOV+DHoqAGMIjct0V/NQhmmovllXLPBRBk3/nfbMOkGwIhAMdlmzDfHRtlzmfr qwxi12uP+4CHSq6boP/HJD0f5rePAiEAiY/rL8HABCBbPc+DqiNa7xGymQ5MigNg Qz/76kiCbWcCIQCE7md16hNnmTRFR8ddlzpHtVJVr4cfEmtVL21+FUR6XwIgJppW G8JRwJz6QFYnzfW/v/+JB/TKD6FHytwp4ODCvac= -----END RSA 
PRIVATE KEY----- ";
#                                                                                                              
#                                                                                                              
# LLAVE PUBLICA DEL TIMBRAJE                                                                                   
$CAF["RSAPUBK"]="-----BEGIN PUBLIC KEY----- MFowDQYJKoZIhvcNAQEBBQADSQAwRgJBAKC4NX13lpWvPlAmIkRdk4yWlDLbIxPA dYgIX7fPWfp7dvF/2Yqyoy3pR7S84jsTxKr4SWXAt5i05VGZoVDZ+BUCAQM= -----END PUBLIC KEY----- ";
?>                                                                                                             
