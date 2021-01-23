<?php

include 'conexion.php';


$json=array();

    if(isset($_GET["documento"])){
        $documento=$_GET["documento"];

        $consulta="select NOMBRE, APELLIDO from usuarios where DNI='{$documento}'";
        $resultado=mysqli_query($conexion, $consulta);
        
        if($registro=mysqli_fetch_assoc($resultado)){
            $consulta_fechas="select FECHA_REGISTRO from entre_rios where DNI='{$documento}' group by FECHA_REGISTRO";
            $resultado_fechas=mysqli_query($conexion, $consulta_fechas);
          
            if($registro_fechas=mysqli_fetch_all($resultado_fechas)){
                $json = array(
					"usuario" => $registro,
					"fechas" => $registro_fechas
				);
                
            }
            else{
                $json = array(
                	"usuario"=>$registro);  
            }     
        }else{
            $resultar["NOMBRE"]='NO REGISTRA';
            $resultar["APELLIDO"]='NO REGISTRA';
            $json =array(
            	"usuario"=>$resultar);
        }

        mysqli_close($conexion);
        echo json_encode($json);
    }else{
        $resultar["succes"]=0;
        $resultar["message"]='ws no retorna';
        $json['usuario'][]=$resultar;
        echo json_encode($json);
    }

?>
