<?php 

class Productos extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model("Producto");

    }

    public function index(){
        $data['producto'] = $this->Producto->obtenerPro();
        $this->load->view('header');
        $this->load->view('productos/index',$data);
        $this->load->view('footer');

    }
    public function nuevo(){
        $this->load->view('header');
        $this->load->view('productos/nuevo');
        $this->load->view('footer');

    }
    public function guardarPro(){
        $listaPro = array(
            "nom_co"=> $this->input->post('nom_co'),
            "descripcion_co"=> $this->input->post('descripcion_co'),
            "pedido_co"=> $this->input->post('pedido_co'),
            "precio_co"=> $this->input->post('precio_co'),
        );
        if ($this->Producto->insertarPro($listaPro)){
            redirect("/Productos/index");
        }else{
            echo "Hay un error";
        }
    }

}



?>