<?php

class ModelAdministradores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //funcion para guardar Correos_enviados 
    public function guardarCorreos_enviados($param)
    {

        $this->db->insert("Correos_Enviados");
    }
     
    //funcion para obtener Correos_enviados 
    public function getCorreos_enviados()
        {
            $this->db->select(); 
            $this->db->from();
            $query = $this->db->get("Correos_Enviados");
            return $query->result();
        }
    //funcion para borrar Correos_enviados    
    public function deleteCorreos_enviados($id){
            $this->db->where();
            $this->db->delete("Correos_Enviados");
            }   
    //funcion para actualizar datos         
    public function updateCorreos_enviados($param)
    {
        $this->db->where();
        $this->db->update("Correos_Enviados");
    } 
}

?>