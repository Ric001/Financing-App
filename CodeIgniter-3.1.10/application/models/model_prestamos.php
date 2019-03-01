<?php

class ModelAdministradores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

     //funcion para guardar Prestamos 
     public function guardarPrestamos($param)
     {
 
         $this->db->insert();
     }
      
     //funcion para obtener Prestamos 
     public function getPrestamos()
         {
             $this->db->select(); 
             $this->db->from();
             $query = $this->db->get();
             return $query->result();
         }
     //funcion para borrar Prestamos    
     public function deletePrestamos($id){
             $this->db->where();
             $this->db->delete();
             }   
     //funcion para actualizar datos         
     public function updatePrestamos($param)
     {
         $this->db->where();
         $this->db->update();
     } 
}

?>