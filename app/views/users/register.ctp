<?php
    echo $this->Form->create('User',array('action'=>'register'));
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->input('password_confirm');
    echo $this->Form->end('Register');
?>