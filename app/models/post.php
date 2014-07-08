<?php

class Post extends AppModel {
	var $name = 'Post';

    var $hasAndBelongsToMany = array('Tag');

	var $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
