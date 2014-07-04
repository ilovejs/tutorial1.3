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
//            $this->data['Task']['finishDate'] = date('d-m-Y', strtotime('now'));

            App::import('Model','CakeSession');
            //http://stackoverflow.com/questions/4620103/proper-way-to-inject-session-data-before-model-save-validate-in-cakephp-1-3
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