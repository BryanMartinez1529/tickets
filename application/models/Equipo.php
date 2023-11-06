<?php
  class Equipo extends CI_Model
  {

    function __construct()
    {
        parent :: __construct();
    }

    function insertar ($datos){
        return $this->db->insert('equipo',$datos);
    }

    function obtenerEquipo(){
        $listadoEquipo=$this->db->get('equipo');
        if ($listadoEquipo->num_rows()>0){
            return $listadoEquipo->result();
        } else{
            return false;
        }
    }

    public function borrar ($id_equi){

        $this->db->where("id_equi",$id_equi);
        return $this->db->delete("equipo");

    }

       public function ObtenerporId($id_equi)
       {
         $this->db->where("id_equi",$id_equi);
         $equipo=$this->db->get("equipo");
         if ($equipo->num_rows()>0){
           return $equipo->row();
         }
          return false;

       }
       //funcion para actualizar un instructor
       public function actualizar($id_equi,$datos)
       {
         $this->db->where("id_equi",$id_equi);
         return $this->db->update("equipo",$datos);
       }


  }



?>
