<?php

class ModelAdministradores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

     //funcion para guardar Prestamos_aprobados
     public function guardarPrestamos_aprobados($param)
     {
 
         $this->db->insert();
     }
      
     //funcion para obtener Prestamos_aprobados 
     public function getPrestamos_aprobados()
         {
             $this->db->select(); 
             $this->db->from();
             $query = $this->db->get();
             return $query->result();
         }
     //funcion para borrar Prestamos_aprobados    
     public function deletePrestamos_aprobados($id){
             $this->db->where();
             $this->db->delete();
             }   
     //funcion para actualizar datos         
     public function updatePrestamos_aprobados($param)
     {
         $this->db->where();
         $this->db->update();
     } 
}

?>