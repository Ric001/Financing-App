<?php

class ModelAdministradores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //funcion para guardar administradores 
    public function guardarAdmin($param)
    {

        $this->db->insert();
    }
     
    //funcion para obtener admins 
    public function getAdmin()
        {
            $this->db->select(); 
            $this->db->from();
            $query = $this->db->get();
            return $query->result();
        }
    //funcion para borrar admins    
    public function deleteAdmin($id){
            $this->db->where();
            $this->db->delete();
            }   
    //funcion para actualizar datos         
    public function updateAdmin($param)
    {
        $this->db->where();
        $this->db->update();
    }        
        
}

?>