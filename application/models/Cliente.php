<?php
  class Cliente extends CI_Model
  {

    function __construct()
    {
        parent :: __construct();
    }

    function insertar ($datos){
        return $this->db->insert('cliente',$datos);
    }

    function obtenerCliente(){
        $listadoCliente=$this->db->get('cliente');
        if ($listadoCliente->num_rows()>0){
            return $listadoCliente->result();
        } else{
            return false;
        }
    }

    public function borrar ($id_cli){

        $this->db->where("id_cli",$id_cli);
        return $this->db->delete("cliente");
   
    }
       
       public function ObtenerporId($id_cli)
       {
         $this->db->where("id_cli",$id_cli);
         $cliente=$this->db->get("cliente");
         if ($cliente->num_rows()>0){
           return $cliente->row();
         }
          return false;
   
       }
       //funcion para actualizar un instructor
       public function actualizar($id_cli,$datos)
       {
         $this->db->where("id_cli",$id_cli);
         return $this->db->update("cliente",$datos);
       }
   

  }



?>