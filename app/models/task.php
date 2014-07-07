<?php
/**
 * Created by PhpStorm.
 * User: MichaelZ
 * Date: 3/07/14
 * Time: 4:16 PM
 */

class Task extends AppModel{
    var $name = "Task";
    //array form rather than 'Session'
    var $components = array('Session');

    var $belongsTo = array(
        'Author' => array(
            'className' => 'Author',
            'foreignKey' => 'author_id'
        )
    );

    function beforeSave(){
        //user input something
        if(!empty($this->data['Task']['body']))
        {
            $this->data['Task']['createDate'] = date('d-m-Y', strtotime('now'));

            App::import('Model','CakeSession');
            $session = new CakeSession();
            $user = $session->read('username');
            debug($user);
            exit;

            $this->data['Task']['author_id'] = $this->Session->read('authorid');
            return true;
        }
    }

    function dateFormatBeforeSave($dateString){
        return date('d-m-Y',strtotime($dateString));
    }

    var $validate = array(
        'authorId' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
} 