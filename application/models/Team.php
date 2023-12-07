<?php
  class Team extends CI_Model
  {

    function __construct()
    {
        parent :: __construct();
    }

    function insertar ($datos){
        return $this->db->insert('team',$datos);
    }

    function obtenerTeam(){
        $listadoTeam=$this->db->get('team');
        if ($listadoTeam->num_rows()>0){
            return $listadoTeam->result();
        } else{
            return false;
        }
    }

    public function borrar ($id_equi){

        $this->db->where("id_equi",$id_equi);
        return $this->db->delete("team");

    }

       public function ObtenerporId($id_equi)
       {
         $this->db->where("id_equi",$id_equi);
         $team=$this->db->get("team");
         if ($team->num_rows()>0){
           return $team->row();
         }
          return false;

       }
       //funcion para actualizar un instructor
       public function actualizar($id_equi,$datos)
       {
         $this->db->where("id_equi",$id_equi);
         return $this->db->update("team",$datos);
       }


  }



?>
