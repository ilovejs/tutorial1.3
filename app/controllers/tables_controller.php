<?php
/**
 * Created by PhpStorm.
 * User: MichaelZ
 * Date: 3/07/14
 * Time: 3:26 PM
 */

class TablesController extends AppController{
    var $helpers = array('Html','Form');
    var $name = 'Tables';
    var $components = array('Session');

    function index(){
        $this->set('tables',$this->Table->find('all'));
    }

}