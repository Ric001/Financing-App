<?php

class ModelAdministradores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

     //funcion para guardar Cliente 
     public function guardarCliente($param)
     {
 
         $this->db->insert();
     }
      
     //funcion para obtener Cliente 
     public function getCliente()
         {
             $this->db->select(); 
             $this->db->from();
             $query = $this->db->get();
             return $query->result();
         }
     //funcion para borrar Cliente    
     public function deleteCliente($id){
             $this->db->where();
             $this->db->delete();
             }   
     //funcion para actualizar datos         
     public function updateCliente($param)
     {
         $this->db->where();
         $this->db->update();
     } 
}

?>