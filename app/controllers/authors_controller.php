<?php
class AuthorsController extends AppController {
    var $name = "Authors";
    var $components = array('Session');
    var $helpers = array('Html','Form');

    function index(){

    }

    //1. first time, data is empty, VIEW is delivered
    //2. Inside VIEW, send Post request to this func again
    function register(){
        if(!empty($this->data)){
            //what is in $this->data
            if($this->Author->save($this->data)){



                $this->redirect(array('controller' => 'tasks',
                                      'action' => 'index'));

            }else{
                $this->Session->setFlash('Register Fail');
            }
        }
    }

    function login(){

    }

    function logout(){

    }
}