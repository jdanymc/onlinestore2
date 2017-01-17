<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once "AbstractController.php";
class Indice extends AbstractController {
    public function index()
    {
        if(isset($_POST)) {
            $this->load->view('autorizar/home_user');
        }
    }
}
