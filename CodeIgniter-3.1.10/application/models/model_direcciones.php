<?php

class ModelAdministradores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

     //funcion para guardar Direcciones en la BD
     public function guardarDirecciones($param)
     {
 
         $this->db->insert("Direcciones");
     }
      
     //funcion para obtener Direcciones en la BD
     public function getDirecciones()
         {
             $this->db->select(); 
             $this->db->from();
             $query = $this->db->get("Direcciones");
             return $query->result();
         }
     //funcion para borrar Direcciones    
     public function deleteDirecciones($id){
             $this->db->where();
             $this->db->delete("Direcciones");
             }   
     //funcion para actualizar datos         
     public function updateDirecciones($param)
     {
         $this->db->where();
         $this->db->update("Direcciones");
     } 
}

?>