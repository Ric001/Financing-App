<?php

class ModelAdministradores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

     //funcion para guardar Financiamientos
     public function guardarFinanciamientos($param)
     {
 
         $this->db->insert();
     }
      
     //funcion para obtener Financiamientos
     public function getFinanciamientos()
         {
             $this->db->select(); 
             $this->db->from();
             $query = $this->db->get();
             return $query->result();
         }
     //funcion para borrar Financiamientos    
     public function deleteFinanciamientos($id){
             $this->db->where();
             $this->db->delete();
             }   
     //funcion para actualizar datos         
     public function updateFinanciamientos($param)
     {
         $this->db->where();
         $this->db->update();
     } 
}

?>