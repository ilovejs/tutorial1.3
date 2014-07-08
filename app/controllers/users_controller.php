<?php

class UsersController extends AppController {
    var $name = 'Users';
    var $components = array('Auth','Session','RequestHandler');
    var $helpers = array('Html');

    function beforeFilter(){
        $this->Auth->allow('index','register');
    }

    function index(){

    }

    function register(){
        if ($this->data) {
            if ($this->data['User']['password'] ==
                $this->Auth->password($this->data['User']['password_confirm']))
            {
                //TODO: this is important to remember
                $this->User->create();

                if($this->User->save($this->data)){

                    $this->Session->setFlash('Register Done');

                    //send email containing password to the user
                    $this->Auth->login($this->data);

                    //store username in session
                    $this->Session->write('userid', $this->User->id);
                    $this->Session->write('username', $this->data['User']['username']);

                    $this->redirect(array('controller'=> 'tasks',
                                          'action' => 'index'));
                }
            }
        }
    }

    //login view has been created
    function login(){
        //store username in session
    }

    function logout(){
        $this->Session->delete('userid');
        $this->Session->delete('username');
        $this->redirect($this->Auth->logout());
    }
}