<?php
/**
 * Created by PhpStorm.
 * User: MichaelZ
 * Date: 3/07/14
 * Time: 4:15 PM
 */

/*
 * http://book.cakephp.org/2.0/en/models/saving-your-data.html
 */
class TasksController extends AppController{
    var $name = "Tasks";
    var $components = array('Auth','Session');
    var $helpers = array('Time');

    //check login or not
    function index(){
        //read session
        $userid = $this->Session->read('userid');
        $username = $this->Session->read('username');

        $this->set('tasks', $this->Task->findAllByAuthorId($userid));

        //set in the view
        $this->set(compact('username', 'userid'));
    }

    function add(){
        if(!empty($this->data)){

            if($this->Task->save($this->data)){
                $this->Session->setFlash('Task Saved');
            }else{
                $this->Session->setFlash('Save Failed');
            }
            $this->redirect(array('action' => 'index'));
        }
    }

    function edit($id = null){
        $this->Task->id = $id;
        if (empty($this->data)) {
            $this->data = $this->Post->read();
        } else {
            if($this->Task->save($this->data)){
                $this->Session->setFlash('Your task has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete(){

    }

    function addTag(){

    }

} 