<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Users extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Modelo");
        $this->methods['user_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

    //saca todos los usuarios en json

    public function user_get(){

        $id = $this->get('id');

    	$users = $this->Modelo->getUsers($id);

		if(!is_null($users))
        {
    		$this->response(array('response' => $users),200);
        } 
        else
        {
            $this->response(NULL);
        }
    }

    public function user_post(){

        $id = $this->post('id');
        $nombre = $this->post('nombre');
        $apellido = $this->post('apellido');

        $result = $this->Modelo->insertUsers($id,$nombre,$apellido);
        if($result === FALSE)
        {
            $this->response(array('status' => 'failed'),404);
        }
        else
        {
            $this->response(array('status' => 'success'),201);
        }
    }

    public function user_put()
    {       
        $id = $this->put('id');
        $nombre = $this->put('nombre');
        $apellido = $this->put('apellido');

        $result = $this->Modelo->setUsers($id,$nombre,$apellido);
        if($result === FALSE)
        {
            $this->response(array('status' => 'failed'),404);
        }
        else
        {
            $this->response(array('status' => 'success'),201);
        }
    }

    public function user_delete()
    {
        $id = $this->get('id');

        $result = $this->Modelo->deleteUser($id);
        if($result === FALSE)
        {
            $this->response(array('status' => 'failed'),404);
        }
        else
        {
            $this->response(array('status' => 'no_content'),204);
        }

    }

}


?>
