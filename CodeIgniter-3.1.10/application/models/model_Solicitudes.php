<?php

class ModelAdministradores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

     //funcion para guardar Solicitudes
     public function guardarSolicitudes($param)
     {
 
         $this->db->insert();
     }
      
     //funcion para obtener Solicitudes 
     public function getSolicitudes()
         {
             $this->db->select(); 
             $this->db->from();
             $query = $this->db->get();
             return $query->result();
         }
     //funcion para borrar Solicitudes    
     public function deleteSolicitudes($id){
             $this->db->where();
             $this->db->delete();
             }   
     //funcion para actualizar datos         
     public function updateSolicitudes($param)
     {
         $this->db->where();
         $this->db->update();
     } 

    
}

?>