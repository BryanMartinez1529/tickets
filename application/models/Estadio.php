<?php
  class Estadio extends CI_Model
  {

    function __construct()
    {
        parent :: __construct();
    }

    function insertar ($datos){
        return $this->db->insert('estadio',$datos);
    }

    function obtenerEstadio(){
        $listadoEstadio=$this->db->get('estadio');
        if ($listadoEstadio->num_rows()>0){
            return $listadoEstadio->result();
        } else{
            return false;
        }
    }

    public function borrar ($id_est){

        $this->db->where("id_est",$id_est);
        return $this->db->delete("estadio");

    }

       public function ObtenerporId($id_est)
       {
         $this->db->where("id_est",$id_est);
         $estadio=$this->db->get("estadio");
         if ($estadio->num_rows()>0){
           return $estadio->row();
         }
          return false;

       }
       //funcion para actualizar un instructor
       public function actualizar($id_est,$datos)
       {
         $this->db->where("id_est",$id_est);
         return $this->db->update("estadio",$datos);
       }


  }



?>
