<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once "AbstractController.php";
class Registrar extends AbstractController {
    public function index()
    {
        if($this->is_post()){
            $email = $this->input->post('email');
            $fechaaux = explode('/',$this->input->post('fechanac'));
            $fechanac = $fechaaux[2].'-'.$fechaaux[1].'-'.$fechaaux[0];
            $nombre = $this->input->post('nombre');
            $apellidos = $this->input->post('apellidos');
            $telefono = $this->input->post('telefono');
            $clave = $this->input->post('clave');

            $this->load->model('Usuario');

            if(!$this->Usuario->existe($email)) {
                $this->Usuario->id = '';
                $this->Usuario->email = $email;
                $this->Usuario->cumpleanios = $fechanac;
                $this->Usuario->nombre = $nombre;
                $this->Usuario->apellidos = $apellidos;
                $this->Usuario->telefono = $telefono;
                $this->Usuario->password = md5($clave);
                $this->Usuario->save();
                if ($this->Usuario->getLastID() > 0) {
                    $this->load->model('UsuarioRelacionTipo');
                    $this->UsuarioRelacionTipo->id = '';
                    $this->UsuarioRelacionTipo->usuarios_id = $this->Usuario->getLastID();
                    $this->UsuarioRelacionTipo->usuarios_tipos_id = '1';
                    $this->UsuarioRelacionTipo->save();
                    $this->load->view('registrar/registrado', (array('nombre' => $nombre)));
                } else {
                    $data = array(
                        'email' => $email,
                        'fechanac' => $this->input->post('fechanac'),
                        'nombre' => $nombre,
                        'apellidos' => $apellidos,
                        'telefono' => $telefono,
                        'error' => 'Error desconocido'
                    );
                    $this->load->view('registrar/index', $data);
                }
            }else{
                $data = array(
                    'email' => $email,
                    'fechanac' => $this->input->post('fechanac'),
                    'nombre' => $nombre,
                    'apellidos' => $apellidos,
                    'telefono' => $telefono,
                    'error' => 'Existe otro usuario con este e-mail'
                );
                $this->load->view('registrar/index', $data);
            }
        }
        else
         $this->load->view('registrar/index');
    }
   /* public function subir(){
        $config['upload_path'] = './fotos/';
        $config['allowed_types'] = 'jpg|png';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()){
            $error=array('error' => $this->upload->display_errors());
            $this->load->view('subir_view', $error);
        }else{
            $datos["img"]=$this->upload->data();
            //Cargamos la vista y le pasamos los datos
            $this->load->view('subir_view', $datos);
        }
    }*/
}