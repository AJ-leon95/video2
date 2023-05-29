<?php 
class Producto extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function insertarPro($listaPro){
        return $this->db->insert("cosas",$listaPro);
    }
    function obtenerPro(){
        $listaProductos =$this->db->get("cosas");
        if ($listaProductos->num_rows()>0){
           return $listaProductos->result();
        }else{
            return false;
        }

    }
}


?>