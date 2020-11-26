<?php

include_once "./View/generoView.php";
include_once "./Model/generoModel.php";
include_once './helper.php';

class generoController{

    private $view;
    private $model;
    private $helper;

    function __construct(){
        $this->view = new generoView();
        $this->model= new generoModel();
        $this->helper= new helper();
    }

    function TablaGeneros ($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $generos=$this->model->GetGeneros();
        $this->view-> showTablaGenero($generos, $logeado);
    }

    function InsertarGenero($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if(empty($_POST['input_tipo']) || !isset($_POST['input_tipo'])){
            $this->view->showError("No se pudo insertar el genero. Por favor complete todos los campos.", $logeado);
        }
        else if($logeado==null || $logeado->administrador==false){
            $this->view->showError("No se puede realizar esta accion si no es administrador", $logeado);
        }
        else{
            $tipo=$_POST['input_tipo'];
            $this->model->insertarGenero($tipo);
            $this->view->showTablaGenerosLocation();
        }
    }
    
    function  DeleteGenero($params=null) {
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if($logeado == null || $logeado->administrador==false){
            $this->view->showError("No se puede realizar esta accion si no es administrador", $logeado);
        }
        else{
            $id_genero= $params[':ID'];
            $this->model ->DeleteGenero($id_genero);
            $this->view->showTablaGenerosLocation(); 
        }
    }

    function EditarGenero($params = null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        if(empty($_POST['editar_genero_input']) || !isset($_POST['editar_genero_input'])){
            $this->view->showError("No se pudo editar el genero. Por favor complete todos los campos.", $logeado);
        }
        else if($logeado==null || $logeado->administrador==false){
            $this->view->showError("No se puede realizar esta accion si no es administrador", $logeado);
        }
        else{
            $id_genero=$params[':ID'];
            $genero=$_POST['editar_genero_input'];
            $this->model->UpdateGenero( $genero,$id_genero);
            $this->view->showTablaGenerosLocation();
        }
    }
    
    function MostrarFormularioInsertarGenero ($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $genero=$this->model->GetGeneros();
        $this->view->showFormularioInsertarGenero($genero, $logeado);
    }

    function MostrarFormularioEditarGenero($params=null){
        $logeado=$this->helper->checkLoggedInAndReturnUserInfo();
        $id_genero=$params[':ID'];
        $datosGeneroPorEditar=$this->model->getGeneroID($id_genero);
        $genero=$this->model->GetGeneros();
        $this->view->showFormularioEditarGenero($genero,$datosGeneroPorEditar, $logeado);
    }
}