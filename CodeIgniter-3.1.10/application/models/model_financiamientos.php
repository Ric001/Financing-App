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
 
         $this->db->insert("Financiamientos");
     }
      
     //funcion para obtener Financiamientos
     public function getFinanciamientos()
         {
             $this->db->select(); 
             $this->db->from();
             $query = $this->db->get("Financiamientos");
             return $query->result();
         }
     //funcion para borrar Financiamientos    
     public function deleteFinanciamientos($id){
             $this->db->where();
             $this->db->delete("Financiamientos");
             }   
     //funcion para actualizar datos         
     public function updateFinanciamientos($param)
     {
         $this->db->where();
         $this->db->update("Financiamientos");
     } 
}

?>