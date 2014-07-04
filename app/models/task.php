<?php
/**
 * Created by PhpStorm.
 * User: MichaelZ
 * Date: 3/07/14
 * Time: 4:16 PM
 */

class Task extends AppModel{
    var $name = "Task";

    var $hasOne = "Author";

    var $validate = array(
        'authorId' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
} 