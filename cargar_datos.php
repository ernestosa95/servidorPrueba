<?php

include 'conexion.php';

$jsonPersona = $_POST['persona'];
$jsonFamilia = $_POST['familia'];

$arrayPersona = json_decode($jsonPersona);
$arrayFamilia = json_decode($jsonFamilia);

// cargo los datos del json de la persona
for($i=0;$i<count($arrayPersona);$i++){
$objet = $arrayPersona[$i];
$consulta="insert into datos_persona values('".$objet->COORDENADAS."', 
                                            '".$objet->FACTORES_DE_RIESGO."',
                                            '".$objet->EFECTOR."', 
                                            '".$objet->OBSERVACIONES."',
											'".$objet->EDUCACION."', 
                                            '".$objet->VITAMINA_D."',
                                            '".$objet->ULTIMO_CONTROL."', 
                                            '".$objet->ENFERMEDAD_ASOCIADA_AL_EMBARAZO."', 
											'".$objet->CERTIFICADO_UNICO_DE_DISCAPACIDAD."',
                                            '".$objet->TIPO_DE_DISCAPACIDAD."',      
                                            '".$objet->ACOMPAÑAMIENTO."',
											'".$objet->TRASTORNOS_EN_NIÑOS."', 
                                            '".$objet->ADICCIONES."',
                                            '".$objet->ACTIVIDADES_DE_OCIO."', 
                                            '".$objet->DONDE_REALIZA_LAS_ACTIVIDADES."',
											'".$objet->TIPO_DE_VIOLENCIA."', 
                                            '".$objet->MODALIDAD_DE_LA_VIOLENCIA."',
                                            '".$objet->TRASTORNOS_MENTALES."', 
											'".$objet->ENFERMEDADES_CRONICAS."',
                                            '".$objet->PLAN_SOCIAL."')";
mysqli_query($conexion, $consulta) or die ("Problemas al insertar".mysqli_error($conexion));
}

// cargo los datos del json de la familia
for($i=0;$i<count($arrayFamilia);$i++){
$objet = $arrayFamilia[$i];
$consulta="insert into entre_rios values(	'".$objet->DNI."', 
											'".$objet->FECHA_REGISTRO."',
											'".$objet->COORDENADAS."', 
											'".$objet->TIPO_DE_VIVIENDA."',
											'".$objet->DUEÑO_DE_LA_VIVIENDA."', 
											'".$objet->CANTIDAD_DE_PIEZAS."',
											'".$objet->LUGAR_PARA_COCINAR."', 
											'".$objet->USA_PARA_COCINAR."',
											'".$objet->MATERIAL_PREDOMINANTE_EN_LAS_PAREDES."', 
											'".$objet->REVESTIMIENTO_EXTERNO_O_REVOQUE."',
											'".$objet->MATERIAL_DE_LOS_PISOS."', 
											'".$objet->CIELORRASO."',
											'".$objet->MATERIAL_PREDOMINANTE_EN_LA_CUBIERTA_EXTERIOR."', 
											'".$objet->AGUA."',
											'".$objet->ORIGEN_AGUA."', 
											'".$objet->EXCRETAS."',
											'".$objet->ELECTRICIDAD."', 
											'".$objet->GAS."',
											'".$objet->ALMACENA_AGUA_DE_LLUVIA."', 
											'".$objet->ÁRBOLES."',
											'".$objet->BAÑO."', 
											'".$objet->EL_BAÑO_TIENE."',
											'".$objet->NIEVE_Y_O_HIELO_EN_LA_CALLE."', 
											'".$objet->PERROS_SUELTOS."')";

mysqli_query($conexion, $consulta) or die ("Problemas al insertar".mysqli_error($conexion));
}

mysqli_close($conexion);

//echo json_encode($array[0]);
//echo $objet->COORDENADAS;
echo 'OK';

/*$COORDENADAS=$_POST['COORDENADAS'];
$FACTORES_DE_RIESGO=$_POST['FACTORES_DE_RIESGO'];
$EFECTOR=$_POST['EFECTOR'];
$OBSERVACIONES=$_POST['OBSERVACIONES'];
$EDUCACION=$_POST['EDUCACION'];
$VITAMINA_D=$_POST['VITAMINA_D'];
$ULTIMO_CONTROL=$_POST['ULTIMO_CONTROL'];
$ENFERMEDAD_ASOCIADA_EMBARAZO=$_POST['ENFERMEDAD_ASOCIADA_EMBARAZO'];
$CERTIFICADO_DISCAPACIDAD=$_POST['CERTIFICADO_DISCAPACIDAD'];
$TIPO_DE_DISCAPACIDAD=$_POST['TIPO_DE_DISCAPACIDAD'];
$ACOMPAÑAMIENTO=$_POST['ACOMPAÑAMIENTO'];
$TRASTORNOS_EN_NIÑOS=$_POST['TRASTORNOS_EN_NIÑOS'];
$ADICCIONES=$_POST['ADICCIONES'];
$ACTIVIDADES_DE_OCIO=$_POST['ACTIVIDADES_DE_OCIO'];
$OCIO_DONDE=$_POST['OCIO_DONDE'];
$TIPO_DE_VIOLENCIA=$_POST['TIPO_DE_VIOLENCIA'];
$MODALIDAD_VIOLENCIA=$_POST['MODALIDAD_VIOLENCIA'];
$TRASTORNOS_MENTALES=$_POST['TRASTORNOS_MENTALES'];
$ENFERMEDADES_CRONICAS=$_POST['ENFERMEDADES_CRONICAS'];
$PLAN_SOCIAL=$_POST['PLAN_SOCIAL'];
$consulta="insert into datos_persona values('".$objet->COORDENADAS."', 
                                            '".$FACTORES_DE_RIESGO."',
                                            '".$EFECTOR."', 
                                            '".$OBSERVACIONES."',
											'".$EDUCACION."', 
                                            '".$VITAMINA_D."',
                                            '".$ULTIMO_CONTROL."', 
											'".$ENFERMEDAD_ASOCIADA_EMBARAZO."',
                                            '".$CERTIFICADO_DISCAPACIDAD."', 
											'".$TIPO_DE_DISCAPACIDAD."',
                                            '".$ACOMPAÑAMIENTO."',      
                                            '".$TRASTORNOS_EN_NIÑOS."',
											'".$ADICCIONES."', 
                                            '".$ACTIVIDADES_DE_OCIO."',
                                            '".$OCIO_DONDE."', 
                                            '".$TIPO_DE_VIOLENCIA."',
											'".$MODALIDAD_VIOLENCIA."', 
                                            '".$TRASTORNOS_MENTALES."',
                                            '".$ENFERMEDADES_CRONICAS."', 
											'".$PLAN_SOCIAL."')";
*/
?>
