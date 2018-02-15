<?php
class Modelo extends CI_Model {
   
   function __construct(){
      parent::__construct();
      $this->load->database('default');
   }

   public function getUsers($id = null){

      if ($id===null) {
         $consulta = $this->db->get('person');
         return $consulta->result_array();
      }else{
         $query = $this->db->get_where('person', array('id' => $id));
        return $query->result_array();     
     }

   }

   public function insertUsers($id,$nombre,$apellido)
   {

    $data = array(
        'id' => $id,
        'nombre' => $nombre,
        'apellido' => $apellido
    );

    return $this->db->insert('person', $data);
}

   public function setUsers($id,$nombre,$apellido){

      $array = array(
              'nombre' => $nombre,
              'apellido' => $apellido
      );

      $this->db->set($array);
      $this->db->where('id', $id);      
      return $this->db->update('person');
   }

   public function deleteUser($id){

      echo "xssssssssssssssssss";

      $this->db->where('id', $id);
      return $this->db->delete('person'); 
   }
 
} 