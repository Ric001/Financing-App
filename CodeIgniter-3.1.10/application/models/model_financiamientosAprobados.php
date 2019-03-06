<?php

class ModelAdministradores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

     //funcion para guardar Financiemientos_aprobados 
     public function guardarFinanciemientos_aprobados($param)
     {
 
         $this->db->insert("Financiamientos_Aprobados");
     }
      
     //funcion para obtener Financiemientos_aprobados 
     public function getFinanciemientos_aprobados()
         {
             $this->db->select(); 
             $this->db->from();
             $query = $this->db->get("Financiamientos_Aprobados");
             return $query->result();
         }
     //funcion para borrar Financiemientos_aprobados    
     public function deleteFinanciemientos_aprobados($id){
             $this->db->where();
             $this->db->delete("Financiamientos_Aprobados");
             }   
     //funcion para actualizar datos         
     public function updateFinanciemientos_aprobados($param)
     {
         $this->db->where();
         $this->db->update("Financiamientos_Aprobados");
     } 
}

?>