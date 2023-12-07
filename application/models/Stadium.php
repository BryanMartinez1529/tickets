<?php
  class Stadium extends CI_Model
  {

    function __construct()
    {
        parent :: __construct();
    }

    function insertar ($datos){
        return $this->db->insert('estadio',$datos);
    }

    function obtenerStadium(){
        $listadoStadium=$this->db->get('stadium');
        if ($listadoStadium->num_rows()>0){
            return $listadoStadium->result();
        } else{
            return false;
        }
    }

    public function borrar ($id_est){

        $this->db->where("id_est",$id_est);
        return $this->db->delete("stadium");

    }

       public function ObtenerporId($id_est)
       {
         $this->db->where("id_est",$id_est);
         $stadium=$this->db->get("stadium");
         if ($stadium->num_rows()>0){
           return $stadium->row();
         }
          return false;

       }
       //funcion para actualizar un instructor
       public function actualizar($id_est,$datos)
       {
         $this->db->where("id_est",$id_est);
         return $this->db->update("stadium",$datos);
       }


  }



?>
