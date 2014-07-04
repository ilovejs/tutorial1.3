<?php

class Author extends AppModel {
    var $name = "Author";

    var $hasMany = "Task";


}