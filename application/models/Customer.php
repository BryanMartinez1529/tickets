<?php
  class Customer extends CI_Model
  {

    function __construct()
    {
        parent :: __construct();
    }

    function insertar ($datos){
        return $this->db->insert('client',$datos);
    }

    function obtenerCustomer(){
        $listadoCustomer=$this->db->get('client');
        if ($listadoCustomer->num_rows()>0){
            return $listadoCustomer->result();
        } else{
            return false;
        }
    }

    public function borrar ($id_cli){

        $this->db->where("id_cli",$id_cli);
        return $this->db->delete("client");

    }

       public function ObtenerporId($id_cli)
       {
         $this->db->where("id_cli",$id_cli);
         $customer=$this->db->get("client");
         if ($customer->num_rows()>0){
           return $customer->row();
         }
          return false;

       }
       //funcion para actualizar un instructor
       public function actualizar($id_cli,$datos)
       {
         $this->db->where("id_cli",$id_cli);
         return $this->db->update("client",$datos);
       }


  }



?>
