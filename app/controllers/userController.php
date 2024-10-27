<?php

    namespace app\controllers;
    use app\models\mainModel;

    class userController extends mainModel{

        /*------- Controlador Registrar usuario --------*/
        public function registrarUsuarioControlador(){

            #Almacenado datos#
            $nombre=$this->limpiarCadena($_POST['usuario_nombre']);
            $whatsapp = $this->limpiarCadena($POST['usuario_whatsapp']);

            $usuario = $this->limpiarCadena($POST['usuario_usuario']);
            $cuenta = $this->limpiarCadena($POST['usuario_cuenta']);
            $clave = $this->limpiarCadena($POST['usuario_clave']);
            $inicio = $this->limpiarCadena($POST['usuario_inicio']);
            $fin = $this->limpiarCadena($POST['usuario_fin']);
            $duracion = $this->limpiarCadena($POST['usuario_duracion']);

            # Verificando campos obligatorios #
            if($nombre=="" || $whatsapp=="" || $cuenta=="" || $clave=="" || duracion==""){(?,?,?,?,?)}
        }
    }