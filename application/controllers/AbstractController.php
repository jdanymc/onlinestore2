<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


abstract class AbstractController extends CI_Controller 
{
	protected $arregloPost;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
    	$this->load->helper('html');
	}

	protected function is_post()
	{
		$tempArray = $this->input->post();
		
		if(empty($tempArray))
		{
			$this->arregloPost = array();
			return FALSE;
		}

		$this->arregloPost = $tempArray;
		return TRUE;
	}

}