<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
include_once "AbstractController.php";
class Autorizar extends AbstractController {

	public function index()
	{
	    if($this->session->userdata('login')) {
	        if($this->session->userdata('tipo')=='1')
                $this->load->view('autorizar/home_administrador',array('nombre'=>$this->session->userdata('nombre')));
            else
                $this->load->view('autorizar/home_user',array('nombre'=>$this->session->userdata('nombre')));
        }
        else {
            if($this->is_post()){
                $email = $this->input->post('email');
                $clave = $this->input->post('clave');

                //optiene clave de BD
                $this->load->model('Usuario');
                $result = $this->Usuario->login($email,$clave);
                if($result) {
                    $sess_array = array();
                    foreach ($result as $row) {
                        $sess_array = array(
                            'id' => $row->id,
                            'nombre' => $row->nombre.' '.$row->apellidos,
                            'tipo' => $row->usuarios_tipos_id,
                            'login' => TRUE
                        );
                        $this->session->set_userdata($sess_array);
                    }
                    if($this->session->userdata('tipo')=='1')
                        $this->load->view('autorizar/home_administrador',$sess_array);
                    else
                        $this->load->view('autorizar/home_user',$sess_array);
                }
                else $this->load->view('autorizar/index',array('login'=>0));
            }
            else{
                $this->load->view('autorizar/index');
            }
        }
	}

	public function salir(){
        $this->session->unset_userdata('login');
        session_destroy();
        redirect('autorizar', 'refresh');
    }
}