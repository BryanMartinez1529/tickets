<?php
  class Ticket extends CI_Model
  {

    function __construct()
    {
        parent :: __construct();
    }

    function insertar ($datos){
        return $this->db->insert('ticket',$datos);
    }

    function obtenerTicket(){
        $listadoTicket=$this->db->get('ticket');
        if ($listadoTicket->num_rows()>0){
            return $listadoTicket->result();
        } else{
            return false;
        }
    }

    public function borrar ($id_ticket){

        $this->db->where("id_ticket",$id_ticket);
        return $this->db->delete("ticket");

    }

       public function ObtenerporId($id_ticket)
       {
         $this->db->where("id_ticket",$id_ticket);
         $ticket=$this->db->get("ticket");
         if ($ticket->num_rows()>0){
           return $ticket->row();
         }
          return false;

       }
       //funcion para actualizar un instructor
       public function actualizar($id_ticket,$datos)
       {
         $this->db->where("id_ticket",$id_ticket);
         return $this->db->update("ticket",$datos);
       }

    }   

?>       