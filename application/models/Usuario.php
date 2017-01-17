<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once "abstractclassBasicModel.php";
class Usuario extends AbstractclassBasicModel
{
    const DB_TABLE = 'usuarios';
    const DB_TABLE_PK = 'id';
    public function __construct(){
        parent::__construct();
    }

    function login($email, $password){
        $this -> db -> select('*');
        $this -> db -> from($this::DB_TABLE);
        $this -> db -> join('relacion_usuarios_tipos', $this::DB_TABLE.'.'.$this::DB_TABLE_PK.' = relacion_usuarios_tipos.usuarios_id', 'inner');
        $this -> db -> where('email', $email);
        $this -> db -> where('password', md5($password));
        $this -> db -> limit(1);
        $query = $this -> db -> get();
        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    function existe($email){
        $this -> db -> select('*');
        $this -> db -> from($this::DB_TABLE);
        $this -> db -> where('email', $email);
        $this -> db -> limit(1);
        $query = $this -> db -> get();
        if($query -> num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}