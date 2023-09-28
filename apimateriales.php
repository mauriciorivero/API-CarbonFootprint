<?php

include_once 'material.php';

class ApiMateriales{


    function getAll(){
        $material = new Material();
        $materiales = array();
        $materiales["items"] = array();

        $res = $material->obtenerMateriales();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['id'],
                    "nombre" => $row['nombre_material'],
                    "coeficiente" => $row['coeficiente'],
                );
                array_push($materiales["items"], $item);
            }
        
            echo json_encode($materiales);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}

?>