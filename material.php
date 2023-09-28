<?php

include_once 'db.php';

class Material extends DB{
    
    function obtenerMateriales(){
        $query = $this->connect()->query('select * from MATERIAL');
        return $query;
    }

}

?>