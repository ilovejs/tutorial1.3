<?php
/**
 * Created by PhpStorm.
 * User: MichaelZ
 * Date: 3/07/14
 * Time: 4:15 PM
 */

class TasksController extends AppController{
    var $name = "Tasks";
    var $components = array('Session');

    //check login or not
    function index(){
        $username = $this->Session->read('username');
        $authorid = $this->Session->read('authorid');
        //set in the view
        $this->set(compact($username, $authorid));

        $this->set('username',$username);
        $this->set('authorid',$authorid);
    }

    function add(){

    }

    function edit(){

    }

    function delete(){

    }

    function addTag(){

    }
} 