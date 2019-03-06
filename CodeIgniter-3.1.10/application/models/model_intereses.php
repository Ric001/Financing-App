<?php

class ModelAdministradores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

     //funcion para guardar Intereses en la BD
     public function guardarIntereses($param)
     {
 
         $this->db->insert("Intereses");
     }
      
     //funcion para obtener Intereses en la BD
     public function getIntereses()
         {
             $this->db->select(); 
             $this->db->from();
             $query = $this->db->get("Intereses");
             return $query->result();
         }
     //funcion para borrar Intereses    
     public function deleteIntereses($id){
             $this->db->where();
             $this->db->delete("Intereses");
             }   
     //funcion para actualizar datos         
     public function updateIntereses($param)
     {
         $this->db->where();
         $this->db->update("Intereses");
     } 
}

?>