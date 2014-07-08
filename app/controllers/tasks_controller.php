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

    function beforeFilter(){
        $this->Session->write('userid', $this->Auth->user('id'));
        $this->Session->write('username', $this->Auth->user('username'));
    }

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
        //get
        if (empty($this->data)) {
            $this->data = $this->Task->read();
        } else {
            //post
            if($this->Task->save($this->data)){
                $this->Session->setFlash('Your task has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id){
        if ($this->Task->delete($id)) {
            $this->Session->setFlash('The task with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

    function addTag(){

    }

} 