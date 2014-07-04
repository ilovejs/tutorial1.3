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
    var $components = array('Session');

    //check login or not
    function index(){
        //fetch db
        $this->set('tasks', $this->Task->find('all'));
        $username = $this->Session->read('username');
        $authorid = $this->Session->read('authorid');
        //set in the view
        $this->set(compact('username', 'authorid'));
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

    function edit(){

    }

    function delete(){

    }

    function addTag(){

    }

} 