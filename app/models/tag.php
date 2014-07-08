<?php

class Tag extends AppModel {
    var $name = "Tag";

    var $hasAndBelongsToMany = array('Post');

    /**
     * CakePHP will assume that the joinTable is named posts_tags.
     */

}